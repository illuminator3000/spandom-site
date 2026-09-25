<?php
/**
 * Класс для получения настроек сайта из элемента инфоблока
 * 
 * Использование:
 * siteConfig::getProperty('LOGO');
 * siteConfig::getProperty('PHONE');
 * siteConfig::getAll(); // все свойства
 */

class siteConfig
{
    const IBLOCK_ID = 8;
    const ELEMENT_ID = 328;

    /** @var array|null Кэш свойств */
    private static $properties = null;

    /**
     * Получить значение свойства по коду
     * 
     * @param string $code Код свойства (например 'LOGO', 'PHONE')
     * @param mixed $default Значение по умолчанию, если свойство не найдено
     * @return mixed
     */
    public static function getProperty(string $code, $default = null)
    {
        $props = self::getAll();

        return $props[$code] ?? $default;
    }

    /**
     * Получить все свойства элемента
     * 
     * @return array [CODE => VALUE]
     */
    public static function getAll(): array
    {
        if (self::$properties !== null) {
            return self::$properties;
        }

        self::$properties = [];

        if (!\Bitrix\Main\Loader::includeModule('iblock')) {
            return self::$properties;
        }

        $res = \CIBlockElement::GetList(
            [],
            [
                'IBLOCK_ID' => self::IBLOCK_ID,
                'ID'        => self::ELEMENT_ID,
                'ACTIVE'    => 'Y',
            ],
            false,
            false,
            ['ID', 'IBLOCK_ID']
        );

        if ($element = $res->GetNextElement()) {
            $props = $element->GetProperties();

            foreach ($props as $code => $prop) {
                self::$properties[$code] = self::normalizeValue($prop);
            }
        }

        return self::$properties;
    }

    /**
     * Нормализация значения свойства в зависимости от типа
     * 
     * @param array $prop Массив свойства из GetProperties()
     * @return mixed
     */
    private static function normalizeValue(array $prop)
    {
        // Множественное свойство
        if ($prop['MULTIPLE'] === 'Y') {
            $values = $prop['VALUE'] ?? [];

            if (!is_array($values)) {
                $values = [$values];
            }

            // Файлы — возвращаем массив путей/ID
            if ($prop['PROPERTY_TYPE'] === 'F') {
                return array_map(function ($fileId) {
                    return self::getFilePath($fileId);
                }, array_filter($values));
            }

            // Список — можно вернуть VALUE или DESCRIPTION, здесь VALUE
            return $values;
        }

        // Одиночное свойство
        $value = $prop['VALUE'] ?? null;

        if ($value === null || $value === '' || $value === false) {
            return null;
        }

        switch ($prop['PROPERTY_TYPE']) {
            case 'F': // Файл
                return self::getFilePath($value);

            case 'L': // Список
                // $prop['VALUE'] — это XML_ID или VALUE в зависимости от настроек
                // Часто удобнее VALUE_ENUM
                return $prop['VALUE_ENUM'] ?? $value;

            case 'E': // Привязка к элементу
            case 'G': // Привязка к разделу
                return $value; // ID

            case 'S': // Строка
            case 'N': // Число
            case 'T': // HTML/текст
            default:
                // Для HTML-свойств иногда нужно ~VALUE
                if (!empty($prop['~VALUE']) && is_array($prop['~VALUE'])) {
                    // TYPE = HTML
                    return $prop['~VALUE']['TEXT'] ?? $prop['~VALUE'];
                }
                return $value;
        }
    }

    /**
     * Получить путь к файлу по ID
     * 
     * @param int|string $fileId
     * @return string|null
     */
    private static function getFilePath($fileId): ?string
    {
        if (!$fileId) {
            return null;
        }

        $file = \CFile::GetFileArray($fileId);

        return $file ? $file['SRC'] : null;
    }

    /**
     * Сбросить кэш (полезно при обновлении настроек)
     */
    public static function clearCache(): void
    {
        self::$properties = null;
    }
}
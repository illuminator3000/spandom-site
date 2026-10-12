<?
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        [
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/local/include/inline-form.php",
            "EDIT_TEMPLATE" => "",
        ],
        false
    );
?>
</main>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="footer__content">
                    <div class="footer__container">
                        <div class="footer__item">
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog.section.list",
                            "menu_footer", // или свой шаблон, например "menu"
                            [
                                "IBLOCK_TYPE"        => "catalog",          // тип инфоблока
                                "IBLOCK_ID"          => "2",                // ID инфоблока каталога
                                "SECTION_ID"         => "",                 // пусто = корневые разделы
                                "SECTION_CODE"       => "",
                                "COUNT_ELEMENTS"     => "N",                // не считать товары
                                "TOP_DEPTH"          => "1",                // только 1 уровень
                                "SECTION_FIELDS"     => ["NAME", "CODE",'SECTION_PAGE_URL'],   // какие поля нужны
                                "SECTION_USER_FIELDS"=> [],
                                "SECTION_URL"        => "",                 // возьмёт из настроек инфоблока
                                "CACHE_TYPE"         => "A",
                                "CACHE_TIME"         => "36000000",
                                "CACHE_GROUPS"       => "Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "SHOW_MAIN" => 'Y',
                            ],
                            false
                        );?>
                        </div>
                        <div class="footer__item">
                            <ul>
                                <li><a >Получение и оплата</a></li>
                                <li><a href="/delivery-tk/">Доставка ТК </a></li>
                                <li><a href="/delivery-city/">Доставка по Иваново</a></li>
                                <li><a href="/delivery-storage/">Самовывоз Иваново</a></li>
                                <li><a href="/payment/">Способы оплаты </a></li>
                                <li><a href="/order-status/">Статус заказа</a></li>
                            </ul>
                        </div>
                        <div class="footer__item">
                            <ul>
                                <li><a>О компании</a></li>
                                <li><a href="/about/">О нас</a></li>
                                <li><a href="/mission-values/">Миссия и ценности</a></li>
                                <li><a href="/partnership/">Партнерство</a></li>
                                <li><a href="/vakancy/">Вакансии</a></li>
                                <li><a href="/documents/">Документы</a></li>
                                <li><a href="/our-production/">Наше производство</a></li>
                            </ul>
                        </div>
                        <div class="footer__item">
                            <ul>
                                <li><a>Информация для клиентов</a></li>
                                <li><a href="/blog/">Блог</a></li>
                                <li><a href="/news/">Новости</a></li>
                                <li><a href="/sale/">Акции</a></li>
                            </ul>
                            <ul>
                                <li><a href="/sale/">Акции</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer__bottom">
                    <div class="footer__logo">
                        <?if($APPLICATION->GetCurPage() == '/'):?>
                            <div class="footer__logo-image">
                                <img src="<?=SiteConfig::getProperty('LOGO')?>" width="84" height="71" loading="lazy" alt="">
                            </div>
                        <?else:?>
                            <a  href = "/" class="footer__logo-image">
                                <img src="<?=SiteConfig::getProperty('LOGO')?>" width="84" height="71" loading="lazy" alt="">
                            </a>
                        <?endif;?>
                        <div class="footer__logo-subtext">
                            <?=SiteConfig::getProperty('LOGO_TEXT')?>
                        </div>
                    </div>
                    <div class="footer__number">
                        <p>Звоните с 9.00 до 17.00:</p>
                        <a href="tel:<?=str_replace(array('(',')','-',' '),'',SiteConfig::getProperty('PHONE'))?>"><?=SiteConfig::getProperty('PHONE')?></a>
                    </div>
                    <div class="footer__messangers">
                        <a href = "<?=SiteConfig::getProperty('VK')?>" class="header-bottom__link">ВКонтакте</a>
                        <a href = "<?=SiteConfig::getProperty('MAX')?>" class="header-bottom__link">Max</a>
                        <a href = "<?=SiteConfig::getProperty('TELEGRAM')?>" class="header-bottom__link">Telegram</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer__coop">
                    <div class="footer__coop-line">
                        <a href="">Согласие на обработку персональных данных</a>
                        <a href="">Договор оферты</a>
                    </div>
                    <div class="footer__coop-line">
                        <a href="">Политика в отношении обработки персональных данных</a>
                        <a href="">Согласие на сбор и обработку файлов cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</footer>
</body>
<script src = "<?=SITE_TEMPLATE_PATH?>/assets/js/main.min.js"></script>
</html>
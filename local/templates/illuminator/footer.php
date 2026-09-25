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
                            <ul>
                                <li><a href="">Каталог</a></li>
                                <li><a href="">Спанбонд в рулонах</a></li>
                                <li><a href="">Двусторонний спанбонд в рулонах</a></li>
                                <li><a href="">Спанбонд для маскировочных сетей</a></li>
                                <li><a href="">Укрывной материал для растений</a></li>
                                <li><a href="">Геотекстиль садовый/строительный</a></li>
                                <li><a href="">Бинты и ленты садовые (строительные)</a></li>
                                <li><a href="">Скатерти праздничные из спанбонда</a></li>
                                <li><a href="">Простыни одноразовые с перфорацией в рулоне</a></li>
                                <li><a href="">Плиссированный спанбонд</a></li>
                            </ul>
                        </div>
                        <div class="footer__item">
                            <ul>
                                <li><a href="">Получение и оплата</a></li>
                                <li><a href="">Доставка ТК </a></li>
                                <li><a href="">Доставка по Иваново</a></li>
                                <li><a href="">Самовывоз Иваново</a></li>
                                <li><a href="">Способы оплаты </a></li>
                                <li><a href="">Статус заказа</a></li>
                            </ul>
                        </div>
                        <div class="footer__item">
                            <ul>
                                <li><a href="">О компании</a></li>
                                <li><a href="">О нас</a></li>
                                <li><a href="">Миссия и ценности</a></li>
                                <li><a href="">Партнерство</a></li>
                                <li><a href="">Вакансии</a></li>
                                <li><a href="">Документы</a></li>
                                <li><a href="">Наше производство</a></li>
                            </ul>
                        </div>
                        <div class="footer__item">
                            <ul>
                                <li><a href="">Информация для клиентов</a></li>
                                <li><a href="">Блог</a></li>
                                <li><a href="">Новости</a></li>
                                <li><a href="">Акции</a></li>
                            </ul>
                            <ul>
                                <li><a href="">Акции</a></li>
                                <li><a href="">Акция1</a></li>
                                <li><a href="">Акция2</a></li>
                                <li><a href="">Акция3</a></li>
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
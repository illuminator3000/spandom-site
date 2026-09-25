<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list","main_slider",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_ID" => "5",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => Array("ID"),
            "PROPERTY_CODE" => Array("TAG"),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "Y",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        )
    );?>
    <?$APPLICATION->IncludeComponent("bitrix:news.list","interesting",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_ID" => "6",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => Array("ID"),
            "PROPERTY_CODE" => Array("TAG","LINK"),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "Y",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        )
    );?>
        <section class="section hero-block">
    <div class="container-fluid">
        <div class="row animate-block">
            <div class="col-xl-6">
                <h2 class="section-title" data-animate-type = "show">Интернет-магазин для профессионалов и&nbsp;бизнеса</h2>
            </div>
            <div class="col-xl-6">
                <div class="hero-block__content" data-animate-type = "show">
                    <div class="hero-block__tabs">
                        <div class="hero-block__tab big-tab">
                            <div class="big-tab__icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/icon_russia.svg" alt="" width="40" height="40" loading="lazy">
                            </div>
                            <div class="big-tab__text">Поставки по всей России</div>
                        </div>
                        <div class="hero-block__tab big-tab">
                            <div class="big-tab__icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/icon_time.svg" alt="" width="40" height="40" loading="lazy">
                            </div>
                            <div class="big-tab__text">100% соблюдение сроков поставки</div>
                        </div>
                    </div>
                    <div class="hero-block__statistics">
                        <div class="hero-block__statistic">
                            <div class="hero-block__statistic-title">1 000</div>
                            <div class="hero-block__statistic-subtitle">довольных клиентов</div>
                        </div>

                        <div class="hero-block__statistic">
                            <div class="hero-block__statistic-title">4 года</div>
                            <div class="hero-block__statistic-subtitle">на рынке нетканых материалов</div>
                        </div>
                    </div>
                    <div class="hero-block__info">
                        <div class="hero-block__info-title">Покупайте как юридическое лицо</div>
                        <div class="hero-block__info__tabs">
                            <div class="default-tab info-tab">Специальные ценовые предложения</div>
                            <div class="default-tab default-tab--new info-tab">Персональный менеджер</div>
                            <div class="default-tab default-tab--new info-tab">Обмен документацией по ЭДО</div>
                            <div class="default-tab info-tab">Возврат НДС</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","slider",
    Array(
            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",		
            "VIEW_MODE" => "TEXT",
            "SHOW_PARENT_NAME" => "Y",
            "IBLOCK_TYPE" => "",
            "IBLOCK_ID" => "2",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_CODE" => "",
            "SECTION_URL" => "",
            "COUNT_ELEMENTS" => "Y",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
            "TOP_DEPTH" => "2",
            "SECTION_FIELDS" => "",
            "SECTION_USER_FIELDS" => "",
            "ADD_SECTIONS_CHAIN" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_NOTES" => "",
            "CACHE_GROUPS" => "Y"
        )		
    );?>
</section>
<section class="section spanbond animate-block">
    <div class="container-fluid">
        <div class="row row--spanbond">
            <div class="col-xl-6">
                <h2 class="section-title">Оптовые закупки спанбонда под любые задачи</h2>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond1.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Промышленное строительство</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond2.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Дорожное строительство</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond3.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Ландшафтный дизайн</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond4.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Сельское хозяйство и агро</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond5.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Системы фильтрации</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond6.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Звукоизоляция и шумоизоляция</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond7.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Товары медицинского назначения</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond8.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Бытовое применение</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="spanbond-card" data-animate-type = "show">
                    <div class="spanbond-card__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/spanbond9.png" width="375" height="375" loading="lazy" alt="">
                    </div>
                    <div class="spanbond-card__title">Смотреть всю нашу продукцию</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    [
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/local/include/banner.php",
        "EDIT_TEMPLATE" => "",
    ],
    false
);
?>
<section class="section product-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="product-block__tab">Удачный сезон</div>
                <h2 class="section-title section-title--product-block">-50% на 20 позиций до 01.09.2026 г.</h2>
                <?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section", 
					"slider", 
					[
						"ACTION_VARIABLE" => "action",
						"ADD_PICT_PROP" => "-",
						"ADD_PROPERTIES_TO_BASKET" => "Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"ADD_TO_BASKET_ACTION" => "ADD",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"BACKGROUND_IMAGE" => "UF_BACKGROUND_IMAGE",
						"BASKET_URL" => "/personal/basket.php",
						"BRAND_PROPERTY" => "-",
						"BROWSER_TITLE" => "-",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"COMPATIBLE_MODE" => "Y",
						"CONVERT_CURRENCY" => "Y",
						"CURRENCY_ID" => "RUB",
						"DATA_LAYER_NAME" => "dataLayer",
						"DETAIL_URL" => "",
						"DISABLE_INIT_JS_IN_COMPONENT" => "N",
						"DISCOUNT_PERCENT_POSITION" => "bottom-right",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"ELEMENT_SORT_FIELD" => "sort",
						"ELEMENT_SORT_FIELD2" => "id",
						"ELEMENT_SORT_ORDER" => "asc",
						"ELEMENT_SORT_ORDER2" => "desc",
						"ENLARGE_PRODUCT" => "PROP",
						"ENLARGE_PROP" => "-",
						"FILTER_NAME" => "arrFilter",
						"HIDE_NOT_AVAILABLE" => "N",
						"HIDE_NOT_AVAILABLE_OFFERS" => "N",
						"IBLOCK_ID" => 2,
						"IBLOCK_TYPE" => "catalog",
						"INCLUDE_SUBSECTIONS" => "Y",
						"LABEL_PROP" => "",
						"LABEL_PROP_MOBILE" => "",
						"LABEL_PROP_POSITION" => "top-left",
						"LAZY_LOAD" => "Y",
						"LINE_ELEMENT_COUNT" => "3",
						"LOAD_ON_SCROLL" => "N",
						"MESSAGE_404" => "",
						"MESS_BTN_ADD_TO_BASKET" => "В корзину",
						"MESS_BTN_BUY" => "Купить",
						"MESS_BTN_DETAIL" => "Подробнее",
						"MESS_BTN_LAZY_LOAD" => "Показать ещё",
						"MESS_BTN_SUBSCRIBE" => "Подписаться",
						"MESS_NOT_AVAILABLE" => "Нет в наличии",
						"META_DESCRIPTION" => "-",
						"META_KEYWORDS" => "-",
						"OFFERS_CART_PROPERTIES" => [
							0 => "ARTNUMBER",
							1 => "COLOR_REF",
							2 => "SIZES_SHOES",
							3 => "SIZES_CLOTHES",
						],
						"OFFERS_FIELD_CODE" => [
							0 => "",
							1 => "",
						],
						"OFFERS_LIMIT" => "0",
						"OFFERS_PROPERTY_CODE" => [
							0 => "SIZES_SHOES",
							1 => "SIZES_CLOTHES",
							2 => "COLOR_REF",
							3 => "MORE_PHOTO",
							4 => "ARTNUMBER",
							5 => "",
						],
						"OFFERS_SORT_FIELD" => "sort",
						"OFFERS_SORT_FIELD2" => "id",
						"OFFERS_SORT_ORDER" => "asc",
						"OFFERS_SORT_ORDER2" => "desc",
						"OFFER_ADD_PICT_PROP" => "-",
						"OFFER_TREE_PROPS" => [
							0 => "COLOR_REF",
							1 => "SIZES_SHOES",
							2 => "SIZES_CLOTHES",
						],
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Товары",
						"PAGE_ELEMENT_COUNT" => "6",
						"PARTIAL_PRODUCT_PROPERTIES" => "N",
						"PRICE_CODE" => [
							0 => "BASE",
						],
						"PRICE_VAT_INCLUDE" => "Y",
						"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
						"PRODUCT_DISPLAY_MODE" => "Y",
						"PRODUCT_ID_VARIABLE" => "id",
						"PRODUCT_PROPERTIES" => [
							0 => "NEWPRODUCT",
							1 => "MATERIAL",
						],
						"PRODUCT_PROPS_VARIABLE" => "prop",
						"PRODUCT_QUANTITY_VARIABLE" => "",
						"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':false}]",
						"PRODUCT_SUBSCRIPTION" => "Y",
						"PROPERTY_CODE" => [
							0 => "NEWPRODUCT",
							1 => "",
						],
						"PROPERTY_CODE_MOBILE" => "",
						"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
						"RCM_TYPE" => "personal",
						"SECTION_CODE" => "",
						"SECTION_ID" => "",
						"SECTION_ID_VARIABLE" => "SECTION_ID",
						"SECTION_URL" => "",
						"SECTION_USER_FIELDS" => [
							0 => "",
							1 => "",
						],
						"SEF_MODE" => "Y",
						"SEF_FOLDER" => "/catalog/",
						"SEF_URL_TEMPLATES" => [
							"sections" => "",
							"section" => "#SECTION_CODE#/",
							"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
							"compare" => "compare/",
						],
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "Y",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SHOW_ALL_WO_SECTION" => "N",
						"SHOW_CLOSE_POPUP" => "N",
						"SHOW_DISCOUNT_PERCENT" => "Y",
						"SHOW_FROM_SECTION" => "N",
						"SHOW_MAX_QUANTITY" => "N",
						"SHOW_OLD_PRICE" => "N",
						"SHOW_PRICE_COUNT" => "1",
						"SHOW_SLIDER" => "Y",
						"SLIDER_INTERVAL" => "3000",
						"SLIDER_PROGRESS" => "N",
						"TEMPLATE_THEME" => "blue",
						"USE_ENHANCED_ECOMMERCE" => "Y",
						"USE_MAIN_ELEMENT_SECTION" => "Y",
						"USE_PRICE_COUNT" => "N",
						"USE_PRODUCT_QUANTITY" => "Y",
						"COMPONENT_TEMPLATE" => "slider_section",
						"MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
						"DISPLAY_COMPARE" => "N"
					],
					false
				);?>        
            </div>
        </div>
    </div>
</section>
<section class = "special">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="special-title">
                    <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3568 14.6722C9.92799 15.1807 9.32013 15.9506 8.79232 16.8128C8.17094 17.8279 7.6849 18.9284 7.6849 19.8607C7.68496 20.8626 7.90472 21.5657 8.30599 22.0238C8.70307 22.4768 9.31661 22.7342 10.2025 22.7611H10.2044C10.2562 22.7629 10.3068 22.7706 10.3568 22.7826C10.407 22.7705 10.4581 22.7629 10.5101 22.7611H10.512C11.3977 22.7342 12.0105 22.4768 12.4076 22.0238C12.809 21.5657 13.0296 20.8628 13.0296 19.8607C13.0296 18.9284 12.5435 17.8279 11.9222 16.8128C11.3943 15.9504 10.7856 15.1807 10.3568 14.6722ZM10.2786 2.44467C8.96625 4.3502 8.25826 5.78948 7.84896 7.09409C7.4159 8.47455 7.31009 9.71629 7.18197 11.2328L7.13412 11.7953V11.7962C7.11689 11.9889 7.02648 12.1675 6.88216 12.2962C6.77391 12.3928 6.64151 12.4564 6.50033 12.4798L6.35677 12.4896C5.41992 12.4648 4.46863 11.9112 3.79329 11.0472C3.4938 10.6666 3.26042 10.2406 3.09701 9.78745C2.21403 11.2847 1.78169 12.6252 1.78158 13.7943C1.78158 17.5066 3.63852 20.4929 6.4974 21.8939C6.27577 21.3065 6.16443 20.6251 6.16439 19.8607C6.16439 18.3125 7.06238 16.6218 7.94076 15.3304C8.82681 14.0278 9.73 13.0767 9.80794 12.9955H9.80892C9.87983 12.9217 9.96477 12.8627 10.0589 12.8226C10.1531 12.7825 10.2544 12.7621 10.3568 12.7621C10.5381 12.7621 10.7124 12.8269 10.849 12.9427L10.9056 12.9955C10.9831 13.0763 11.8874 14.0274 12.7738 15.3304C13.6521 16.6218 14.5501 18.3124 14.5501 19.8607C14.5501 20.6259 14.4363 21.307 14.2142 21.8949C17.0701 20.4959 18.9273 17.5169 18.9329 13.8119L18.9163 13.4945C18.6923 10.2672 16.8114 8.71734 14.5374 6.8558C13.0423 5.63177 11.4692 4.34474 10.2786 2.44467ZM20.4535 13.7943C20.4535 19.7553 16.2908 24.1825 10.5472 24.2816H10.5345C10.4731 24.2816 10.4135 24.2712 10.3558 24.2572C10.2945 24.2716 10.2326 24.2818 10.1702 24.2816H10.1663C4.423 24.1825 0.260092 19.7553 0.260092 13.7943C0.260236 11.7953 1.22525 9.54619 3.07064 7.11655C3.17544 6.97885 3.32461 6.88102 3.49251 6.8392C3.6606 6.79745 3.83825 6.81433 3.99544 6.88705C4.15258 6.95978 4.28076 7.08352 4.35775 7.23862C4.43468 7.39365 4.45631 7.57053 4.41927 7.73959V7.74057C4.24396 8.53486 4.45415 9.42309 4.99154 10.1107C5.20671 10.3857 5.45151 10.5995 5.69857 10.7455C5.82452 9.27895 5.96267 7.95162 6.46126 6.44858C7.00062 4.82284 7.95537 3.0048 9.74447 0.570648V0.569672C9.82206 0.464317 9.92591 0.381149 10.0452 0.327484C10.1646 0.273804 10.2958 0.252111 10.4261 0.264008C10.5565 0.27594 10.6817 0.321356 10.7894 0.395844C10.8971 0.470324 10.9842 0.571036 11.0413 0.688812L11.2493 1.09409C12.3264 3.07596 13.9175 4.38257 15.5013 5.67905C17.8507 7.60261 20.1626 9.48718 20.4329 13.3851L20.4535 13.7689V13.7943Z" fill="#FF0080" stroke="#FF0080" stroke-width="0.520833" />
                    </svg>
                    <span>Специальные предложения – август 2026</span>
                </div>
            </div>
        </div>
         <?$APPLICATION->IncludeComponent("bitrix:news.list","sale",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_ID" => "7",
            "NEWS_COUNT" => "2",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => Array("ID"),
            "PROPERTY_CODE" => Array("TAG","LINK"),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "Y",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        )
    );?>
    </div>
</section>
        <section class="section hit-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title section-title--hit-block">Хиты продаж</h2>
                    <div class="hit-block__tags tags-switcher">
                        <div class="tags-switcher__item active">В розницу</div>
                        <div class="tags-switcher__item">Для бизнеса</div>
                    </div>
                   <?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section", 
					"slider", 
					[
						"ACTION_VARIABLE" => "action",
						"ADD_PICT_PROP" => "-",
						"ADD_PROPERTIES_TO_BASKET" => "Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"ADD_TO_BASKET_ACTION" => "ADD",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"BACKGROUND_IMAGE" => "UF_BACKGROUND_IMAGE",
						"BASKET_URL" => "/personal/basket.php",
						"BRAND_PROPERTY" => "-",
						"BROWSER_TITLE" => "-",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"COMPATIBLE_MODE" => "Y",
						"CONVERT_CURRENCY" => "Y",
						"CURRENCY_ID" => "RUB",
						"DATA_LAYER_NAME" => "dataLayer",
						"DETAIL_URL" => "",
						"DISABLE_INIT_JS_IN_COMPONENT" => "N",
						"DISCOUNT_PERCENT_POSITION" => "bottom-right",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"ELEMENT_SORT_FIELD" => "sort",
						"ELEMENT_SORT_FIELD2" => "id",
						"ELEMENT_SORT_ORDER" => "asc",
						"ELEMENT_SORT_ORDER2" => "desc",
						"ENLARGE_PRODUCT" => "PROP",
						"ENLARGE_PROP" => "-",
						"FILTER_NAME" => "arrFilter",
						"HIDE_NOT_AVAILABLE" => "N",
						"HIDE_NOT_AVAILABLE_OFFERS" => "N",
						"IBLOCK_ID" => 2,
						"IBLOCK_TYPE" => "catalog",
						"INCLUDE_SUBSECTIONS" => "Y",
						"LABEL_PROP" => "",
						"LABEL_PROP_MOBILE" => "",
						"LABEL_PROP_POSITION" => "top-left",
						"LAZY_LOAD" => "Y",
						"LINE_ELEMENT_COUNT" => "3",
						"LOAD_ON_SCROLL" => "N",
						"MESSAGE_404" => "",
						"MESS_BTN_ADD_TO_BASKET" => "В корзину",
						"MESS_BTN_BUY" => "Купить",
						"MESS_BTN_DETAIL" => "Подробнее",
						"MESS_BTN_LAZY_LOAD" => "Показать ещё",
						"MESS_BTN_SUBSCRIBE" => "Подписаться",
						"MESS_NOT_AVAILABLE" => "Нет в наличии",
						"META_DESCRIPTION" => "-",
						"META_KEYWORDS" => "-",
						"OFFERS_CART_PROPERTIES" => [
							0 => "ARTNUMBER",
							1 => "COLOR_REF",
							2 => "SIZES_SHOES",
							3 => "SIZES_CLOTHES",
						],
						"OFFERS_FIELD_CODE" => [
							0 => "",
							1 => "",
						],
						"OFFERS_LIMIT" => "0",
						"OFFERS_PROPERTY_CODE" => [
							0 => "SIZES_SHOES",
							1 => "SIZES_CLOTHES",
							2 => "COLOR_REF",
							3 => "MORE_PHOTO",
							4 => "ARTNUMBER",
							5 => "",
						],
						"OFFERS_SORT_FIELD" => "sort",
						"OFFERS_SORT_FIELD2" => "id",
						"OFFERS_SORT_ORDER" => "asc",
						"OFFERS_SORT_ORDER2" => "desc",
						"OFFER_ADD_PICT_PROP" => "-",
						"OFFER_TREE_PROPS" => [
							0 => "COLOR_REF",
							1 => "SIZES_SHOES",
							2 => "SIZES_CLOTHES",
						],
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Товары",
						"PAGE_ELEMENT_COUNT" => "6",
						"PARTIAL_PRODUCT_PROPERTIES" => "N",
						"PRICE_CODE" => [
							0 => "BASE",
						],
						"PRICE_VAT_INCLUDE" => "Y",
						"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
						"PRODUCT_DISPLAY_MODE" => "Y",
						"PRODUCT_ID_VARIABLE" => "id",
						"PRODUCT_PROPERTIES" => [
							0 => "NEWPRODUCT",
							1 => "MATERIAL",
						],
						"PRODUCT_PROPS_VARIABLE" => "prop",
						"PRODUCT_QUANTITY_VARIABLE" => "",
						"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':false}]",
						"PRODUCT_SUBSCRIPTION" => "Y",
						"PROPERTY_CODE" => [
							0 => "NEWPRODUCT",
							1 => "",
						],
						"PROPERTY_CODE_MOBILE" => "",
						"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
						"RCM_TYPE" => "personal",
						"SECTION_CODE" => "",
						"SECTION_ID" => "",
						"SECTION_ID_VARIABLE" => "SECTION_ID",
						"SECTION_URL" => "",
						"SECTION_USER_FIELDS" => [
							0 => "",
							1 => "",
						],
						"SEF_MODE" => "Y",
						"SEF_FOLDER" => "/catalog/",
						"SEF_URL_TEMPLATES" => [
							"sections" => "",
							"section" => "#SECTION_CODE#/",
							"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
							"compare" => "compare/",
						],
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "Y",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SHOW_ALL_WO_SECTION" => "N",
						"SHOW_CLOSE_POPUP" => "N",
						"SHOW_DISCOUNT_PERCENT" => "Y",
						"SHOW_FROM_SECTION" => "N",
						"SHOW_MAX_QUANTITY" => "N",
						"SHOW_OLD_PRICE" => "N",
						"SHOW_PRICE_COUNT" => "1",
						"SHOW_SLIDER" => "Y",
						"SLIDER_INTERVAL" => "3000",
						"SLIDER_PROGRESS" => "N",
						"TEMPLATE_THEME" => "blue",
						"USE_ENHANCED_ECOMMERCE" => "Y",
						"USE_MAIN_ELEMENT_SECTION" => "Y",
						"USE_PRICE_COUNT" => "N",
						"USE_PRODUCT_QUANTITY" => "Y",
						"COMPONENT_TEMPLATE" => "slider_section",
						"MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
						"DISPLAY_COMPARE" => "N"
					],
					false
				    );?>  
            </div>
        </div>
    </div>
</section>
        <section class="section @@special catalog">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-12">
                <h2 class="section-title catalog-title">Каталог</h2>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","list",
        Array(
                "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",		
                "VIEW_MODE" => "TEXT",
                "SHOW_PARENT_NAME" => "Y",
                "IBLOCK_TYPE" => "",
                "IBLOCK_ID" => "2",
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_CODE" => "",
                "SECTION_URL" => "",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                "TOP_DEPTH" => "2",
                "SECTION_FIELDS" => "",
                "SECTION_USER_FIELDS" => "",
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_NOTES" => "",
                "CACHE_GROUPS" => "Y"
            )		
        );?>
    </div>
</section>
        <section class="section news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title news-title">Новости</h2>
                <div class="hit-block__tags tags-switcher">
                    <div class="tags-switcher__item active">Новости</div>
                    <div class="tags-switcher__item">Полезные статьи</div>
                    <div class="tags-switcher__item">Инструкции</div>
                </div>
            </div>
        </div>
         <?$APPLICATION->IncludeComponent("bitrix:news.list","news_list",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_ID" => "1",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => Array("ID"),
            "PROPERTY_CODE" => Array("TAG","LINK"),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "Y",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        )
    );?>
      
        
        <a href="/news.html" class="default-btn news-btn">Смотреть все новости</a>
    </div>
</section>
<section class="advantages-block animate-block">
    <div class="container-fluid">
        <div class="row row--advantage">
            <div class="col-xl-6">
                <h2 class="section-title" data-animate-type = "show">Преимущества работы с компанией «СПАНдом»</h2>
            </div>
            <div class="col-xl-6">
                <div class="hero-block__tabs" data-animate-type = "show">
                    <div class="hero-block__tab big-tab">
                        <div class="big-tab__icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/icon_roll.svg" alt="" width="40" height="40" loading="lazy">
                        </div>
                        <div class="big-tab__text">Выполняем сложение рулонов и УФ стабилизацию</div>
                    </div>
                    <div class="hero-block__tab big-tab">
                        <div class="big-tab__icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/icon_cutting.svg" alt="" width="40" height="40" loading="lazy">
                        </div>
                        <div class="big-tab__text">Резка рулонов по согласованию с заказчиком</div>
                    </div>
                    <div class="hero-block__tab big-tab">
                        <div class="big-tab__icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/icon_color.svg" alt="" width="40" height="40" loading="lazy">
                        </div>
                        <div class="big-tab__text">Разрабатываем и производим индивидуальные цвета</div>
                    </div>
                    <div class="hero-block__tab big-tab">
                        <div class="big-tab__icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/icon_chemistry.svg" alt="" width="40" height="40" loading="lazy">
                        </div>
                        <div class="big-tab__text">Успешно внедряем новые добавки и стабилизаторы</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="video-block">
        <div class="video-block__container">
            <video src=""></video>
            
            <div class="video-block__container-image">
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/video.png" width="1600" height="900" loading="lazy" alt="">
                <div class="video-block__icon">
                    <svg width="117" height="117" viewBox="0 0 117 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="58.5" cy="58.5" r="58" stroke="white" />
                        <path d="M52 66.4339V51.5661C52 50.0043 53.7102 49.0451 55.0429 49.8595L67.2074 57.2934C68.4836 58.0733 68.4836 59.9267 67.2074 60.7066L55.0429 68.1404C53.7102 68.9549 52 67.9957 52 66.4339Z" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="video-block__advantages">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                         <div class="video-block__advantages-slider advantages-slider swiper-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide advantages-slide">
                                    <div class="advantages-slide__content">
                                        <div class="advantages-slide__title">Плотность спанбонда:</div>
                                        <div class="advantages-slide__value">от 10 до 150 гр/м2</div>
                                    </div>
                                </div>
                                <div class="swiper-slide advantages-slide">
                                    <div class="advantages-slide__content">
                                        <div class="advantages-slide__title">Ширина спанбонда:</div>
                                        <div class="advantages-slide__value">от 0,175 до 3,20 м</div>
                                    </div>
                                </div>
                                <div class="swiper-slide advantages-slide">
                                    <div class="advantages-slide__content">
                                        <div class="advantages-slide__title">Цвета:</div>
                                        <div class="advantages-slide__value">67 цветов и оттенков</div>
                                    </div>
                                </div>
                                <div class="swiper-slide advantages-slide advantages-slide--fill">
                                    <div class="advantages-slide__content">
                                        <div class="advantages-slide__name">Больше информации про производство можно найти на сайте производства:</div>
                                        <a href = "/span" class="advantages-slide__link">Перейти на сайт производства 
                                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.75 6.25H13.75M7.96528 11.75L13.75 6.25L7.96528 0.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
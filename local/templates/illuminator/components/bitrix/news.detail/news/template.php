<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="detail-news">
	<div class="container-fluid">
		<div class="row row--catalog">
			<div class="col-xl-6">
				<div class="news-detail-image__container">
					<div class="news-detail-image">
						<div class="news-slider swiper-slider">
							<div class="swiper-wrapper">
								<div class="news-slide swiper-slide">
									<div class="news-slide__image">
										<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" width="770" height="770" alt="">
									</div>
								</div>
								<?if(isset($arResult['PROPERTIES']['PICS_NEWS']) && !empty($arResult['PROPERTIES']['PICS_NEWS']['VALUE'])):?>
									<?foreach($arResult['PROPERTIES']['PICS_NEWS']['VALUE'] as $picture):?>
									<div class="news-slide swiper-slide">
										<div class="news-slide__image">
											<img src="<?=CFile::GetPath($picture)?>" width="770" height="770" alt="">
										</div>
									</div>
									<?endforeach?>
								<?endif;?>
							</div>
							<div class="swiper-pagination"></div>
							<div class="navigation-button-prev swiper-button-prev">
								<svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="58" height="58" rx="10" fill="white" />
									<rect x="0.5" y="0.5" width="57" height="57" rx="9.5" stroke="black" stroke-opacity="0.1" />
									<path d="M35 29.5H22M29 36L22 29.5L29 23" stroke="black" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</div>
							<div class="navigation-button-next swiper-button-next">
								<svg style="transform: rotate(180deg);" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="58" height="58" rx="10" fill="white" />
									<rect x="0.5" y="0.5" width="57" height="57" rx="9.5" stroke="black" stroke-opacity="0.1" />
									<path d="M35 29.5H22M29 36L22 29.5L29 23" stroke="black" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="news-detail__content">
					<h1 class="news-detail__title"><?=$arResult['NAME']?></h1>
					<div class="news-detail__description">
						<?=$arResult['DETAIL_TEXT']?>		
						<?if(isset($arResult['PROPERTIES']['PRODUCTS']) && !empty($arResult['PROPERTIES']['PRODUCTS']['VALUE'])):?>
							<?
							global $trendFilter;
							$trendFilter = $arResult['PROPERTIES']['PRODUCTS']['VALUE'];
							?>
							
							<h2>Трендовые расцветки:</h2>
							<?/*
							<?$APPLICATION->IncludeComponent(
								"bitrix:catalog.section", 
								"product_in_news", 
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
									"FILTER_NAME" => "trendFilter",
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
							*/?>
						<?endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


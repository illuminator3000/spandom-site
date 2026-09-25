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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>



<div class="category-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="category-slider swiper-slider">
                        <div class="swiper-wrapper">
							<?php foreach ($arResult['SECTIONS'] as &$arSection){
									$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
									$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
							?>
                            <div class="swiper-slide category-slide">
                                <a href = "<?=$arSection['SECTION_PAGE_URL']?>" class="category-card">
                                    <div class="category-card__image">
                                        <img src="<?=$arSection['PICTURE']['SRC']?>" loading="lazy" width="375" height="375" alt="">
                                    </div>
                                    <div class="category-card__title"><?=$arSection['NAME']?></div>
                                </a>
                            </div>
							<?}?>
                        </div>
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
    </div>
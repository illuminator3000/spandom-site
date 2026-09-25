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
<div class="catalog-container">
    <div class="row row--catalog">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-xl-4 col-md-6 col-12">
		<a href = "<?=$arItem['DETAIL_PAGE_URL']?>" class="news-card">
			<div class="news-card__content">
				<div class="news-card__date"><?=$arItem["ACTIVE_FROM"]?></div>
				<div class="news-card__title"><?=$arItem['NAME']?></div>
				<div class="news-card__text"><?=$arItem['PREVIEW_TEXT']?></div>
			</div>
			<div class="news-card__image">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" width="375" height="375" loading="lazy" alt="">
			</div>
		</a>
	</div>
<?endforeach;?>
 	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

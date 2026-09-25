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
<section class =  "fs_slider swiper-slider">
    <div class="swiper-wrapper">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="swiper-slide fs_slide" >
				<div class="fs_slide__content" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')">
					<div class="fs_slide__tab"><?=$arItem['PROPERTIES']['TAG']['VALUE']?></div>
					<div class="fs_slide__title"><?=$arItem['NAME']?></div>
				</div>
			</div>
		<?endforeach;?>
    </div>
    <div class="swiper-pagination"></div>
</section>


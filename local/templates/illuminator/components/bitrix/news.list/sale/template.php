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
<div class="row row--sale">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-xl-6"> 
		<a href = "<?=$arItem['DETAIL_PAGE_URL']?>" class="sale-card sale-card--img-only">
			<div class="sale-card__bg-image">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" width="770" height="425" loading="lazy" alt="">
			</div>
		</a>         
	</div>
<?endforeach;?>
 	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

<!-- <div class="row row--sale">
	<div class="col-xl-6"> 
		<div class="sale-card sale-card--sale sale-card--dark">
			<div class="sale-card__content">
				<div class="default-tab sale-card__tab">скидка 50%</div>
				<div class="sale-card__title">на трендовые цвета этого лета</div>
				<div class="sale-card__detail">
					<div class="sale-card__detail__info">
						<div class="sale-card__detail__info-low-text">3216 ₽/м2</div>
						<div class="sale-card__detail__info-normal-text">1608 ₽/м2</div>
						<div class="sale-card__detail__info-substr">*Акция действует до конца августа</div>
					</div>
					<div class="sale-card__detail__image">
						<img src="/images/sale-detail.png" width="490" height="160" loading="lazy" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-xl-6"> 
		<div class="sale-card sale-card--new">
			<div class="sale-card__content">
				<div class="default-tab default-tab--new sale-card__tab">скидка 50%</div>
				<div class="sale-card__title">спанбонд в цвете мокко</div>
			</div>
			<div class="sale-card__bg-image">
				<img src="/images/sale-bg.png" width="770" height="425" loading="lazy" alt="">
			</div>
		</div>         
	</div>
	<div class="col-xl-6"> 
		<div class="sale-card sale-card--sale sale-card--dark">
			<div class="sale-card__content">
				<div class="default-tab sale-card__tab">скидка 50%</div>
				<div class="sale-card__title">на трендовые цвета этого лета</div>
				<div class="sale-card__detail">
					<div class="sale-card__detail__info">
						<div class="sale-card__detail__info-low-text">3216 ₽/м2</div>
						<div class="sale-card__detail__info-normal-text">1608 ₽/м2</div>
						<div class="sale-card__detail__info-substr">*Акция действует до конца августа</div>
					</div>
					<div class="sale-card__detail__image">
						<img src="/images/sale-detail.png" width="490" height="160" loading="lazy" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
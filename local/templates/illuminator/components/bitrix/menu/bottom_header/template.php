<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header-bottom">
	<?foreach($arResult as $arItem):?>
		<?if($arItem["SELECTED"]):?>
			<a class="header-bottom__link"><?=$arItem["TEXT"]?></a>
		<?else:?>
			<a href="<?=$arItem["LINK"]?>" class="header-bottom__link"><?=$arItem["TEXT"]?></a>
		<?endif?>
	<?endforeach?>
</div>
<?endif?>
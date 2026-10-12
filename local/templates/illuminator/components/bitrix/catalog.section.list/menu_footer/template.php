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
<ul>
	<?if($arParams['SHOW_MAIN'] == 'Y'):?>
		<li><a href="/catalog/">Каталог</a></li>
	<?endif;?>
	<?
	foreach ($arResult['SECTIONS'] as $arSection)
	{
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
	?>
	<li><a href="<?=$arSection['SECTION_PAGE_URL']?>"><?=$arSection['NAME']?></a></li>
	<?}?>
</ul>
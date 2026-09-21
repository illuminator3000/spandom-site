<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arParams
 * @var array $templateData
 * @var string $templateFolder
 * @var CatalogSectionComponent $component
 */

global $APPLICATION;

if (isset($templateData['TEMPLATE_THEME']))
{
	$APPLICATION->SetAdditionalCSS($templateFolder.'/themes/'.$templateData['TEMPLATE_THEME'].'/style.css');
	$APPLICATION->SetAdditionalCSS('/bitrix/css/main/themes/'.$templateData['TEMPLATE_THEME'].'/style.css', true);
}

if (!empty($templateData['TEMPLATE_LIBRARY']))
{
	$loadCurrency = false;
	if (!empty($templateData['CURRENCIES']))
	{
		$loadCurrency = \Bitrix\Main\Loader::includeModule('currency');
	}

	CJSCore::Init($templateData['TEMPLATE_LIBRARY']);

	if ($loadCurrency)
	{
		?>
		<script>
			BX.Currency.setCurrencies(<?=$templateData['CURRENCIES']?>);
		</script>
		<?
	}
}

//	lazy load and big data json answers
$request = \Bitrix\Main\Context::getCurrent()->getRequest();
if ($request->isAjaxRequest() && ($request->get('action') === 'showMore' || $request->get('action') === 'deferredLoad'))
{
	$content = ob_get_contents();
	ob_end_clean();

	[, $itemsContainer] = explode('<!-- items-container -->', $content);
	$paginationContainer = '';
	if ($templateData['USE_PAGINATION_CONTAINER'])
	{
		[, $paginationContainer] = explode('<!-- pagination-container -->', $content);
	}
	[, $epilogue] = explode('<!-- component-end -->', $content);

	if (isset($arParams['AJAX_MODE']) && $arParams['AJAX_MODE'] === 'Y')
	{
		$component->prepareLinks($paginationContainer);
	}

	$component::sendJsonAnswer(array(
		'items' => $itemsContainer,
		'pagination' => $paginationContainer,
		'epilogue' => $epilogue,
	));
}
// вывод 
if(!$this->__template) {
	$this->InitComponentTemplate();
}
$this->__template->SetViewTarget('tags');
$intSectionID = $arResult['ID'];
	if ($intSectionID) {

		$rs = CIBlockSection::GetList(
			[],
			["ID" => $intSectionID, "IBLOCK_ID" => $arParams['IBLOCK_ID']],
			false,
			["ID", "CODE", "SECTION_PAGE_URL", "IBLOCK_ID"]
		);
		if ($arSection = $rs->GetNext()) {
			$sectionUrl = $arSection["SECTION_PAGE_URL"];
		}
		$rs = CIBlockElement::GetList(
			["SORT" => "ASC", "NAME" => "ASC"],
			[
				"IBLOCK_ID"         => 4,
				"ACTIVE"            => "Y",
				"PROPERTY_CATEGORY" => $intSectionID, // привязка к разделу
			],
			false,
			false,
			["ID", "NAME", "PROPERTY_FILTER_URL","PROPERTY_CATEGORY"]
		);

		while ($ar = $rs->Fetch()) {
			
			$tags[] = [
				"ID"         => (int)$ar["ID"],
				"NAME"       => $ar["NAME"],
				"FILTER_URL" => $ar["PROPERTY_FILTER_URL_VALUE"],
				"CATEGORY" => $ar['PROPERTY_CATEGORY_VALUE']
			];
		}

	}
?>
	<div class="catalog-tags">
		<ul class="catalog-tags__list">
			<?foreach($tags as $tag):?>
				<?
					$apply = false;
					$url = $sectionUrl.'/filter/'.$tag['FILTER_URL'].'/apply/';
					if($arParams["SMART_FILTER_PATH"] == $tag['FILTER_URL']){
						$apply = true;
						$url = $sectionUrl.'/filter/clear/apply/';
					}
				?>
			<li class="catalog-tags__item <?=($apply) ? 'active' : '';?>"
				data-filter='<?=$url?>'>
				<div class="catalog-tags__item-name"><?=$tag['NAME']?></div>
				<div class="catalog-tags__item-icon">
					<svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.5 2L5.5 7M10.5 12L5.5 7M5.5 7L0.5 12M5.5 7L10.5 2" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</li>
			<?endforeach;?>
		</ul>
	</div>
<?
$this->__template->EndViewTarget();
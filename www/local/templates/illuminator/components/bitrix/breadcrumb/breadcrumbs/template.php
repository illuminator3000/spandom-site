<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<section class="breadscrumbs">';
$strReturn .= '<div class="container-fluid">';
$strReturn .= '<div class="row">';
$strReturn .= '<div class="col-12">';

$strReturn .= '<ul class=" breadscrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList" id = "navigation"> ';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadscrumbs__item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a class = "breadscrumbs__link" href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					'.$title.'
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="breadscrumbs__item">
				<span class="breadscrumbs__link">'.$title.'</span>
			</li>';
	}
}

$strReturn .= '</ul></div></div></div> </section>';

return $strReturn;
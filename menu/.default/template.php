<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var \CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? if(!empty($arResult)): ?>
<ul class="left-menu">

<?php
foreach($arResult as $arItem):
	if($arParams['MAX_LEVEL'] == 1 && $arItem['DEPTH_LEVEL'] > 1)
		continue;
?>

	<? if($arItem['SELECTED']): ?>
	<li>
		<a href="<?=$arItem['LINK']?>" class="selected"><?=$arItem['TEXT']?></a>
	</li>
	<? else: ?>
	<li>
		<a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
	</li>
	<? endif; ?>

<? endforeach; ?>

</ul>
<? endif; ?>

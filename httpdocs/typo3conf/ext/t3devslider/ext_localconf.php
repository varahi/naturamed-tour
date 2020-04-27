<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'T3Dev.' . $_EXTKEY,
	'T3devslider',
	array(
		'Item' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Item' => '',
		
	),
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig ('

mod.wizards.newContentElement.wizardItems.common.elements.t3devslider_t3devslider {
    icon = sysext/core/Resources/Public/Icons/T3Icons/default/default-not-found.svg
    title = Слайдер
    description = Слайдер на главной странице
    tt_content_defValues {
        CType = t3devslider_t3devslider
    }
}
mod.wizards.newContentElement.wizardItems.common.show := addToList(t3devslider_t3devslider)

');
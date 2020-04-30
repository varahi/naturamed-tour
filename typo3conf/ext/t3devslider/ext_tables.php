<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'T3Dev.' . $_EXTKEY,
	'T3devslider',
	'T3Dev Slider'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'T3Dev Slider');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3devslider_domain_model_item', 'EXT:t3devslider/Resources/Private/Language/locallang_csh_tx_t3devslider_domain_model_item.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3devslider_domain_model_item');

$tmp_t3devslider_columns = array(

		'tx_t3devslider_item' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:barcarousel/Resources/Private/Language/locallang_db.xlf:tx_t3devslider_domain_model_slider.item',
				'config' => array(
						'type' => 'inline',
						'foreign_table' => 'tx_t3devslider_domain_model_item',
						'foreign_field' => 'tt_content',
						'maxitems'      => 9999,
						'appearance' => array(
								'collapseAll' => 1,
								'levelLinksPosition' => 'top',
								'showSynchronizationLink' => 1,
								'showPossibleLocalizationRecords' => 1,
								'useSortable' => 1,
								'showAllLocalizationLink' => 1
						),
				),

		),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$tmp_t3devslider_columns);

$TCA['tt_content']['types']['t3devslider_t3devslider'] = array(
		'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,header,tx_gridelements_container,tx_gridelements_columns,tx_t3devslider_item,tx_t3devslider_domain_model_item'
);

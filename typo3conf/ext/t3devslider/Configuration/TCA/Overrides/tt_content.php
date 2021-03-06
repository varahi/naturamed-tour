<?php

if (!isset($GLOBALS['TCA']['tt_content']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['tt_content']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['tt_content']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['tt_content']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumnstx_t3devslider_tt_content = array();
	$tempColumnstx_t3devslider_tt_content[$GLOBALS['TCA']['tt_content']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:t3devslider/Resources/Private/Language/locallang_db.xlf:tx_t3devslider.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => array(
				array('Slider','Tx_T3devslider_Slider')
			),
			'default' => 'Tx_T3devslider_Slider',
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumnstx_t3devslider_tt_content, 1);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'tt_content',
	$GLOBALS['TCA']['tt_content']['ctrl']['type'],
	'',
	'after:' . $GLOBALS['TCA']['tt_content']['ctrl']['label']
);

$tmp_t3devslider_columns = array(

	'item' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:t3devslider/Resources/Private/Language/locallang_db.xlf:tx_t3devslider_domain_model_slider.item',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_t3devslider_domain_model_item',
			'foreign_field' => 'slider',
			'foreign_sortby' => 'sorting',
			'maxitems' => 9999,
			'appearance' => array(
				'collapseAll' => 0,
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

/* inherit and extend the show items from the parent class */

if(isset($GLOBALS['TCA']['tt_content']['types']['1']['showitem'])) {
	$GLOBALS['TCA']['tt_content']['types']['Tx_T3devslider_Slider']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tt_content']['types'])) {
	// use first entry in types array
	$tt_content_type_definition = reset($GLOBALS['TCA']['tt_content']['types']);
	$GLOBALS['TCA']['tt_content']['types']['Tx_T3devslider_Slider']['showitem'] = $tt_content_type_definition['showitem'];
} else {
	$GLOBALS['TCA']['tt_content']['types']['Tx_T3devslider_Slider']['showitem'] = '';
}
$GLOBALS['TCA']['tt_content']['types']['Tx_T3devslider_Slider']['showitem'] .= ',--div--;LLL:EXT:t3devslider/Resources/Private/Language/locallang_db.xlf:tx_t3devslider_domain_model_slider,';
$GLOBALS['TCA']['tt_content']['types']['Tx_T3devslider_Slider']['showitem'] .= 'item';

$GLOBALS['TCA']['tt_content']['columns'][$GLOBALS['TCA']['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:t3devslider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_extbase_type.Tx_T3devslider_Slider','Tx_T3devslider_Slider');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
	'',
	'EXT:/Resources/Private/Language/locallang_csh_.xlf'
);
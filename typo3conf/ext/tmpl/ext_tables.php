<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Template Rendering');

$GLOBALS['TCA']['pages']['columns'] += array(

    'hide_breadcrumb' => array(
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang.xlf:page.hide_breadcrumb',
        'exclude' => 1,
        'config' => array (
            'type' => 'check',
            'items' => array(
                array('', '')
            )
        )
    ),

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'hide_breadcrumb', '1', 'after:title'
);

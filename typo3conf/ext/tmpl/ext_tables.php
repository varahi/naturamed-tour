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

    'section_class' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang.xlf:page.section_class',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array(
                array('LLL:EXT:tmpl/Resources/Private/Language/locallang.xlf:page.select.no_class', ''),
                array('LLL:EXT:tmpl/Resources/Private/Language/locallang.xlf:page.select.class_cooperation', 'cooperation'),
                array('LLL:EXT:tmpl/Resources/Private/Language/locallang.xlf:page.select.class_advantage', 'advantage'),
                array('LLL:EXT:tmpl/Resources/Private/Language/locallang.xlf:page.select.class_about', 'about'),
                array('LLL:EXT:tmpl/Resources/Private/Language/locallang.xlf:page.select.class_rest_in_russia', 'sanatorii-rossii'),
                //array('Some class name', 'some_class_value'),
            ),
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
        ),
    ),

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'hide_breadcrumb', '1', 'after:title'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'section_class', '1', 'after:hide_breadcrumb'
);

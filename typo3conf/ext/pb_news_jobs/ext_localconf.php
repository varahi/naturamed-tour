<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Extend EXT:news
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'pb_news_jobs';

<?php
defined('TYPO3_MODE') || die('Access denied.');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('T3Dev.Tmpl', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('T3Dev.Tmpl', 'Content');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass'][]
    = \T3Dev\Tmpl\Hooks\FlexFormHook::class;
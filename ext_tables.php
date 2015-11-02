<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Wondrous Hubs');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Vendor.WondrousHubs', 'Content');


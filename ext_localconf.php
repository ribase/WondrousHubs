// ext_localconf.php

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Vendor.WondrousHubs', 'Content');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '
    plugin.tx_myextensionkey.view {
        templateRootPaths.10 = EXT:wondrous_hubs/Resources/Private/Templates/
        partialRootPaths.10 = EXT:wondrous_hubs/Resources/Private/Partials/
        layoutRootPaths.10 = EXT:wondrous_hubs/Resources/Private/Layouts/
    }
');
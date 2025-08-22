<?php
use NITSAN\NsMadhav\Controller\PriceController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;


defined(constant_name: 'TYPO3') or die;

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'ns_madhav',//extension key
        'Madhavlist',//plugin key
        [
            \NITSAN\NsMadhav\Controller\PriceController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \NITSAN\NsMadhav\Controller\PriceController::class => 'list'    
        ],
        null
    );

   
})();

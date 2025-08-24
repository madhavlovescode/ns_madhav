<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

use TYPO3\CMS\Core\Schema\Struct\SelectItem;

defined('TYPO3') or die('Access denied.');

// Register Plugins
ExtensionUtility::registerPlugin(
    'NsMadhav',
    'Madhavlist',
    'Madhavlist'
);

//plugin for details page 
ExtensionUtility::registerPlugin(
    'NsMadhav',
    'MadhavDetails',
    'MadhavDetails'
);


$pluginSignatureShow = 'nsmadhav_madhavdetails';

// Add FlexForm for price list Show
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureShow] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignatureShow,
    'FILE:EXT:ns_madhav/Configuration/FlexForms/flexformShow.xml'
);

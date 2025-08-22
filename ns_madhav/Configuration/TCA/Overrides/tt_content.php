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




<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3mc', 'Configuration/TypoScript/', 'TYPO3 11 Mihnea Cojocaru TestPlugin');

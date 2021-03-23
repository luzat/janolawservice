<?php
defined('TYPO3') or die();

call_user_func(function()
{
  $extensionKey = 'janolawservice';

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    $extensionKey,
    'constants',
    "@import 'EXT:$extensionKey/Configuration/TypoScript/constants.typoscript'"
  );
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    $extensionKey,
    'setup',
    "@import 'EXT:$extensionKey/Configuration/TypoScript/setup.typoscript'"
  );
});

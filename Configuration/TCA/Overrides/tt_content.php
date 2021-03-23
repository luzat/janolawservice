<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {
    // Einbindung Flexform
    $pluginSignature = 'janolawservice_showjanolawservice';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Janolaw.Janolawservice',
        'Showjanolawservice',
        'Show janolaw Service'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:janolawservice/Configuration/FlexForms/FF_JanolawService_ShowJanolawservice.xml'
    );
});

<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */

    $customPageDoktype = 116;
    $customPageIcon = 'miscellaneous-placeholder';
    // Add the new doktype to the page type selector
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'pages',
        'doktype',
        [
            'label' => 'Seite ohne Inhalt',
            'value' => $customPageDoktype,
            'icon'  => $customPageIcon,
            'group' => 'special',
        ],
    );
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes'][$customPageDoktype] = $customPageIcon;
});

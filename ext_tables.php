<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$TCA['tx_contexts_contexts'] = array(
	'ctrl' => array(
		'title'     => 'LLL:EXT:contexts/Resources/Private/Language/locallang_db.xml:tx_contexts_contexts',
		'label'     => 'title',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'dividers2tabs' => 1,
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY) . 'icon_tx_contexts_contexts.gif',
	),
);

require_once t3lib_extMgm::extPath($_EXTKEY).'Classes/Api/Configuration.php';

Tx_Contexts_Api_Configuration::registerContextType('default', 'Tx_Contexts_Context_Default');
Tx_Contexts_Api_Configuration::addToTca('pages');
Tx_Contexts_Api_Configuration::addToTca('tt_content');
?>
<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}




t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Layar POI Server');


t3lib_extMgm::addLLrefForTCAdescr('tx_f2layar_domain_model_poi', 'EXT:f2layar/Resources/Private/Language/locallang_csh_tx_f2layar_domain_model_poi.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_f2layar_domain_model_poi');
$TCA['tx_f2layar_domain_model_poi'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Poi.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_f2layar_domain_model_poi.gif'
	),
);

?>
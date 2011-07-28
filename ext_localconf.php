<?php
/**
 * Created by JetBrains PhpStorm.
 * User: falcifer
 * Date: 28/07/11
 * Time: 17:54
 * To change this template use File | Settings | File Templates.
 */
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'POIserver',
	array('Poi' => 'list'),
	array()
);
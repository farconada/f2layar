<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$TCA['tx_f2layar_domain_model_poi'] = array(
    'ctrl' => $TCA['tx_f2layar_domain_model_poi']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, atttribution, latitude, longitude, image, line2, line3, line4, type, dimension, alt, relativealt, distance, infocus, donotindex, showsmallbiw, showbiwonclick',
    ),
    'types' => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, map,atttribution, latitude, longitude, image, line2, line3, line4, type, dimension, alt, relativealt, distance, infocus, donotindex, showsmallbiw, showbiwonclick,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_f2layar_domain_model_poi',
                'foreign_table_where' => 'AND tx_f2layar_domain_model_poi.pid=###CURRENT_PID### AND tx_f2layar_domain_model_poi.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'atttribution' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.atttribution',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'latitude' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.latitude',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'longitude' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.longitude',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'image' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.image',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'uploadfolder' => 'uploads/tx_f2layar',
                'show_thumbs' => 1,
                'size' => 5,
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'disallowed' => '',
            ),
        ),
        'line2' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.line2',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'line3' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.line3',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'line4' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.line4',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'type' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.type',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ),
        ),
        'dimension' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.dimension',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ),
        ),
        'alt' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.alt',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ),
        ),
        'relativealt' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.relativealt',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ),
        ),
        'distance' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.distance',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'infocus' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.infocus',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
        'donotindex' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.donotindex',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
        'showsmallbiw' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.showsmallbiw',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
        'showbiwonclick' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.showbiwonclick',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
        'map' => array(
            'label' => 'LLL:EXT:f2layar/Resources/Private/Language/locallang_db.xml:tx_f2layar_domain_model_poi.map',
            'config' => array(
                'type' => 'user',
                'userFunc' => 'Tx_F2layar_TcaMap->render',
                'parameters' => array(
                    'latitude' => 'gps_latitude',
                    'longitude' => 'gps_longitude',
                ),
            ),
        ),
    ),
);
?>
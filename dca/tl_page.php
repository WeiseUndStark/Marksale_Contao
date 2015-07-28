<?php

/**
 * Table tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace(';{global_legend', ';{mstc_legend},mstcId;{global_legend', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);

$GLOBALS['TL_DCA']['tl_page']['fields']['mstcId'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['mstcId'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>64),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['a_Bookkeeping'] = array(
    'subpanel_setup' => array(
        'notes' => array(
            'order' => 20,
            'module' => 'Notes',
            'sort_order' => 'asc',
            'sort_by' => 'date_entered',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'notes',
            'title_key' => 'LBL_NOTES',
        ),
    ),
);
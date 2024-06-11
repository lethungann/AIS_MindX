<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['a_Class'] = array( //
    'subpanel_setup' => array(
        'budget' => array( //
            'order' => 20,
            'module' => 'a_Budget', //
            'sort_order' => 'asc',
            'sort_by' => 'code_name', //
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'budget', //
            'title_key' => 'LBL_BUDGET', //
        ),
    ),
);
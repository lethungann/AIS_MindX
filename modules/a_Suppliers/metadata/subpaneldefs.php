<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['a_Suppliers'] = array(
    'subpanel_setup' => array(
        'assets' => array(
            'order' => 10,
            'module' => 'a_Asset',
            'sort_order' => 'asc',
            'sort_by' => 'code_name',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'assets',
            'title_key' => 'LBL_ASSETS',
        ),
    ),
);
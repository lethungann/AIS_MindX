<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['a_Students'] = array( //
    'subpanel_setup' => array(
        'contracts' => array( //
            'order' => 10,
            'module' => 'a_Contracts', //
            'sort_order' => 'asc',
            'sort_by' => 'name', //
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'contracts', //
            'title_key' => 'LBL_CONTRACTS', //
        ),
        'invoice' => array( //
            'order' => 20,
            'module' => 'a_Invoice', //
            'sort_order' => 'asc',
            'sort_by' => 'name', //
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'invoice', //
            'title_key' => 'LBL_INVOICE', //
        ),
    ),
);

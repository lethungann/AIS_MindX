<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['a_Invoice'] = array( //
    'subpanel_setup' => array(
        'receipts' => array( //
            'order' => 10,
            'module' => 'a_Receipts', //
            'sort_order' => 'asc',
            'sort_by' => 'name', //
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'receipts', //
            'title_key' => 'LBL_RE', //
        ),

        'accountreceivable' => array( //
            'order' => 20,
            'module' => 'a_AccountReceivable', //
            'sort_order' => 'asc',
            'sort_by' => 'name', //
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'accountreceivable', //
            'title_key' => 'LBL_AR', //
        ),
    ),
);

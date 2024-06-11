<?php
//đổi tên


$dictionary['a_Reports']['fields']['date_start'] = array(
    'name' => 'date_start',
    'vname' => 'LBL_DATESTART',
    'type' => 'date',
);
$dictionary['a_Reports']['fields']['date_end'] = array(
    'name' => 'date_end',
    'vname' => 'LBL_DATEEND',
    'type' => 'date',
);
$dictionary['a_Reports']['fields']['status'] = array(
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'options' => 'reports_status_list',
);
$dictionary['a_Reports']['fields']['data']['rows'] = 6;
$dictionary['a_Reports']['fields']['data']['cols'] = 80;
$dictionary['a_Reports']['fields']['data']['required'] = false;
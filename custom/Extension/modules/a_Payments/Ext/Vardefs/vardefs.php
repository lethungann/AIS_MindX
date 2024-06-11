<?php
//đổi tên

$dictionary['a_Payments']['fields']['date_payment'] = array(
    'name' => 'date_payment',
    'label' => 'LBL_DATE_PAYMENT',
    'type' => 'date',
);
$dictionary['a_Payments']['fields']['tax'] = array(
    'name' => 'tax',
    'vname' => 'LBL_TAX',
    'type' => 'decimal',
    'len' => '26,0',
    'default' => '0',
);
$dictionary['a_Payments']['fields']['debit_tax'] = array(
    'name' => 'debit_tax',
    'vname' => 'LBL_DEBIT_TAX',
    'type' => 'int',
    'default' => '0',
);

<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic Contract', // Tên tự đặt gợi nhớ
    'custom/modules/a_Contracts/logicContract.php', // ĐƯờng dẫn đến file logichook
    'logicContract', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);
$hook_array['after_retrieve'] = array();
$hook_array['after_retrieve'][] = array(
    1,
    'logic Contract',
    'custom/modules/a_Contracts/logicContract.php',
    'logicContract',
    'handleAfterRetrieve',
);
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1,
    'logic Contract',
    'custom/modules/a_Contracts/logicContract.php',
    'logicContract',
    'handleContract',
);

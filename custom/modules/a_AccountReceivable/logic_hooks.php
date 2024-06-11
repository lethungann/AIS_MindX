<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic AR', // Tên tự đặt gợi nhớ
    'custom/modules/a_AccountReceivable/logicAR.php', // ĐƯờng dẫn đến file logichook
    'logicAR', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);

$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1,
    'logic AR',
    'custom/modules/a_AccountReceivable/logicAR.php',
    'logicAR',
    'handleGetList',
);
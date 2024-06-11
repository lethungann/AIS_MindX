<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic Receipt', // Tên tự đặt gợi nhớ
    'custom/modules/a_Receipts/logicReceipt.php', // ĐƯờng dẫn đến file logichook
    'logicReceipt', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    1, // mặc định
    'logic Receipt After Save', // Tên tự đặt gợi nhớ
    'custom/modules/a_Receipts/logicReceipt.php', // ĐƯờng dẫn đến file logichook
    'logicReceipt', // Tên class trong file có đường dẫn trên
    'handleAfterSave', // Tên function trong class đó
);
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1, // mặc định
    'logic', // Tên tự đặt gợi nhớ
    'custom/modules/a_Receipts/logicReceipt.php', // ĐƯờng dẫn đến file logichook
    'logicReceipt', // Tên class trong file có đường dẫn trên
    'handleReceipts', // Tên function trong class đó
);
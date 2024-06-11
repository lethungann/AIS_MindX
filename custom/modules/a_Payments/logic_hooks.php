<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic Payment', // Tên tự đặt gợi nhớ
    'custom/modules/a_Payments/logicPayment.php', // ĐƯờng dẫn đến file logichook
    'logicPayment', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1, // mặc định
    'logic ', // Tên tự đặt gợi nhớ
    'custom/modules/a_Payments/logicPayment.php', // ĐƯờng dẫn đến file logichook
    'logicPayment', // Tên class trong file có đường dẫn trên
    'handlePayment', // Tên function trong class đó
);
<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic Budget', // Tên tự đặt gợi nhớ
    'custom/modules/a_Budget/logicBudget.php', // ĐƯờng dẫn đến file logichook
    'logicBudget', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1, // mặc định
    'logic Budget', // Tên tự đặt gợi nhớ
    'custom/modules/a_Budget/logicBudget.php', // ĐƯờng dẫn đến file logichook
    'logicBudget', // Tên class trong file có đường dẫn trên
    'handleAsset', // Tên function trong class đó
);
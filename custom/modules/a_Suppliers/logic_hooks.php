<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic Supplier', // Tên tự đặt gợi nhớ
    'custom/modules/a_Suppliers/logicSupplier.php', // ĐƯờng dẫn đến file logichook
    'logicSupplier', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);
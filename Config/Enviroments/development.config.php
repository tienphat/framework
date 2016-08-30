<?php

/**
 * 0 = tắt
 * 1 = PHP, Database trừ trên service
 * 10 = tất cả
 */
$exports['debugMode'] = 10;

//kết nối database
$exports['db'] = array(
    'type' => 'mysqli',
    'host' => '127.0.0.1',
    'name' => 'framework',
    'user' => 'root',
    'pass' => ''
);

$exports['cryptSecrect'] = 'abM)(*2312';

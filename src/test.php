<?php

//error
use Zyimm\dbStructSync\Sync;

error_reporting(E_ALL);
ini_set('display_errors', true);
include '../vendor/autoload.php';
//db
$config = [
    'local' => [
        'host'     => 'mysql',
        'username' => 'root',
        'passwd'   => '123456',
        'dbname'   => 'crmeb_supplier'
    ],
    'dev'   => [
        'host'     => 'mysql',
        'username' => 'root',
        'passwd'   => '123456',
        'dbname'   => 'shop'
    ]
];
$handle = new Sync($config);
echo $handle->toHtml();

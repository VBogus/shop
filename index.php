<?php

define('VG_ACCESS', true);

header('content-Type:text/html:charset=utf-8');
session_start();
require_once ('config.php');
require_once ('core/base/settings/internal_settings.php');


set_include_path{get_include_path()
    .PATH_SEPARATOR.'n1'
    .PATH_SEPARATOR.'n1'
}
include 'n1/A.php';
$a= new A();

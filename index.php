<?php

define('VG_ACCESS', true);
echo "Vse rabotaet" . '<br>';
header('content-Type:text/html:charset=utf-8');
session_start();
require_once ('config.php');
require_once ('core/base/settings/internal_settings.php');
$a=10;
echo "otvet $a"."<h1>";
use core\base\exceptions\RouteException;
use core\base\controllers\RouteController;

try{
   //RouteController::getInstance()->route();
   RouteController::getInstance();
}
catch (RouteException $e) {
    exit ($e->getMessage());
}

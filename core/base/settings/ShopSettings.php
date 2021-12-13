<?php

namespace core\base\settings;
use core\base\settings\settings;

class ShopSettings
{
    private $baseSettings;
    private $_instance;
    private $routes=[
        'plugins'=>[
            'path'=>'core/plugins/',
            'hrUrl'=>false,
            'dir'=>false]
        ];
    private $teplateArr=[
        'text'=>['price','short'],
        'textarea'=>['goods_content']
    ];
    
    private function __construct()
    {
    }
    private function __clone()
    {
    }   
    static public function get($property){
        return self::instace()->$property;
    }   
    static public function instace(){
        if (self::$_instance instanceof self){
            return self::$_instance;
        }
        self::$_instance=new self;
        self::$_instance->baseSettings=Settings::instace();
        $baseproperties=self::$_instance->baseSettings->clueProperties(get_class());
        return self::$_instance;
    }
}


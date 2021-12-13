<?php

namespace core\base\settings;

class Settings
{
    static private $_instance;
    private $routes=[
        'admin'=>[
            'alias'=>'admin',
            'path'=> 'core/admin/controller/',
            'hrUrl'=> false
        ],
        'settings'=>[
            'path'=>'core/base/settings/'
        ],
        'plugins'=>[
            'path'=>'core/plugins/',
            'hrUrl'=>false,
            'dir'=>false
        ],
        'user'=>[
            'path'=> 'core/user/controller/',
            'hrUrl'=> true,
            'routes'=> [

            ]
            ],
            'default'=>[
                'controller'=> 'IndexController',
                'inputMethod'=> 'imputData',
                'outputMethod'=> 'outputData'
                ]
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
        return self::$_instance=new self;
    }
    public function clueProperties($class){
        $baseProperties=[];
        foreach($this as $name=>$item){
            $property=$class::get($name);
            $baseProperties[$name]=$property;
        }
        exit();
        }
}
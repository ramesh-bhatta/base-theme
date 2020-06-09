<?php

namespace Techie\config;

class Config
{
    private static $instance;
    private static $config=[];

    public static function getInstance(){
        return is_null(static::$instance)?static::$instance:new Config();
    }

    public static function getConfig(){
    }

    public static function setConfig(){

    }
}
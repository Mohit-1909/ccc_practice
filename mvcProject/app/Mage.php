<?php

class Mage
{
    protected static $_baseDir = 'C:\xampp\htdocs\practice\mvcProject';
    public static function init()
    {
        // $requestModel = new Core_Model_Request();
        // $requestModel = Mage::getModel("core/request");
        // $requestUri = $requestModel->getRequestUri();
        // echo $requestUri;

        $frontController = new Core_Controller_Front();
        $frontController->init();
    }

    public static function getModel($className)
    {
        $className = ucwords(str_replace("/", "_Model_", $className), "_");
        // echo $className;
        return new $className();

    }

    public static function getBlock($className)
    {
        $className = ucwords(str_replace("/", "_Block_", $className), "_");
        // echo $className;
        return new $className();

    }
    public static function getSingleton($className)
    {
    }
    public static function register($key, $value)
    {
    }
    public static function registry($key)
    {
    }
    public static function getBaseDir($subDir = null)
    {
        if (is_null($subDir)) {
            return self::$_baseDir;
        }
        return self::$_baseDir . '/' . $subDir;
    }

}
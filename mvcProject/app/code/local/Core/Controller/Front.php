<?php

class Core_Controller_Front
{

    public function init()
    {
        // $coreModelRequest = new Core_Model_Request();
        $coreModelRequest = Mage::getModel('core/request');

        // $moduleName = $coreModelRequest->getModuleName();
        // $controllerName = $coreModelRequest->getControllerName();
        $actionName = $coreModelRequest->getActionName() . "Action";

        $fullClassName = $coreModelRequest->getFullControllerClass();
        // echo $fullClassName;
        $fullClassObj = new $fullClassName();
        // echo get_class($fullClassObj);
        $fullClassObj->$actionName();


    }
}
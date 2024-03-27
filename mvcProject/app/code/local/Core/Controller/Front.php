<?php

class Core_Controller_Front
{

    public function init()
    {
        $coreModelRequest = Mage::getModel('core/request');

        $actionName = $coreModelRequest->getActionName() . "Action";

        $fullClassName = $coreModelRequest->getFullControllerClass();
        $fullClassObj = new $fullClassName();
        $fullClassObj->$actionName();


    }
}
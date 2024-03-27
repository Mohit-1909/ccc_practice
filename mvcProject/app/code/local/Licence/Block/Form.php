<?php

class Licence_Block_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('licence/form.phtml');
    }

    public function getUser()
    {
        $sessionId = Mage::getModel('core/session')->getId();
        return Mage::getModel('licence/request')->getCollection()
            ->addFieldToFilter(
                'session_id',
                $sessionId
            )->getFirstItem()
        ;
    }
    public function getState()
    {
        return Mage::getModel('licence/state')->getCollection()->getData();
    }
}
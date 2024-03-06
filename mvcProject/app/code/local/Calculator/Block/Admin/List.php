<?php

class Calculator_Block_Admin_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("calculator/list.phtml");
    }

    public function getDataList()
    {
        return Mage::getModel("calculator/product")
            ->getCollection()
            ->getData();
    }
}
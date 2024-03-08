<?php

class Calc_Block_Calculator extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('loancalculator/form.phtml');
    }
    public function getBankRate()
    {
        return Mage::getModel('loancalculator/bank')
            ->getCollection()
            ->getData();
    }
}
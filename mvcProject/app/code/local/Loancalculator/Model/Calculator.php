<?php

class Loancalculator_Model_Calculator extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Loancalculator_Model_Resource_Calculator';
        $this->_collectionClass = 'Loancalculator_Model_Resource_Collection_Calculator';
    }
    public function _beforeSave()
    {
        $bankCode = $this->getBankCode();
        $principalAmount = $this->getLoanAmount();
        $rate = Mage::getBlock('loancalculator/bank')->getBankRateByCode($bankCode) / 12;
        $term = $this->getTerm();
        $formula = ($principalAmount * ($rate) * pow(($rate + 1), $term)) / (pow($rate + 1, $term - 1));
        $this->addData('result', $formula);
    }
}

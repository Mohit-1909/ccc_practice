<?php

class Calculator_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Calculator_Model_Resource_Product';
        $this->_collectionClass = 'Calculator_Model_Resource_Collection_Product';
    }

    public function _beforeSave()
    {
        $result = null;
        switch ($this->getOperator()) {
            case "add":
                $result = $this->getFrom() + $this->getTo();
                break;
            case "minus":
                $result = $this->getFrom() - $this->getTo();
                break;
            case "multiply":
                $result = $this->getFrom() * $this->getTo();
                break;
            case "divide":
                $result = $this->getFrom() / $this->getTo();
                break;
            case "percentage":
                $result = $this->getFrom() % $this->getTo();
                break;
            default:
                $result = "Invalid operator";
        }
        $this->addData('result', $result);
    }

}
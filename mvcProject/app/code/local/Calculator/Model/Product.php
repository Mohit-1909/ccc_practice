<?php

class Calculator_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Calculator_Model_Resource_Product';
        $this->_collectionClass = 'Calculator_Model_Resource_Collection_Product';
    }
}
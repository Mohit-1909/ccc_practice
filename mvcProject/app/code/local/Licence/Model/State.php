<?php

class Licence_Model_State extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Licence_Model_Resource_State';
        $this->_collectionClass = 'Licence_Model_Resource_Collection_State';
    }
}
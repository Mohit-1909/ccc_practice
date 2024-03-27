<?php

class Licence_Model_Request extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Licence_Model_Resource_Request';
        $this->_collectionClass = 'Licence_Model_Resource_Collection_Request';
    }
}
<?php

class Core_Model_Abstract
{

    protected $_data = [];
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;
    public function __construct()
    {
    }
    public function setResourceClass($resourceClass)
    {
    }
    public function setCollectionClass($collectionClass)
    {
    }
    public function setId($id)
    {
    }
    public function getId()
    {
    }
    public function getResource()
    {
    }
    public function getCollection()
    {
    }
    public function getPrimaryKey()
    {
    }
    public function getTableName()
    {
    }
    public function __set($key, $value)
    {
    }
    public function __get($key)
    {
    }
    public function __unset($key)
    {
    }
    public function getData($key = null)
    {
    }
    public function setData($data)
    {
    }
    public function addData($key, $value)
    {
    }
    public function removeData($key = null)
    {
    }
    public function save()
    {
    }
    public function load($id, $column = null)
    {
    }
    public function delete()
    {
    }


}
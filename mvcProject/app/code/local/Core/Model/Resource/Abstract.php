<?php

class Core_Model_Resource_Abstract
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }

    public function getTableName()
    {
        return $this->_tableName;
    }

    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM  {$this->_tableName} WHERE `{$this->_primaryKey}`=$id LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }
    public function insertSql($tablename, $data)
    {

        $columns = $values = [];
        foreach ($data as $column => $value) {
            $columns[] = sprintf("`%s`", $column);
            $values[] = sprintf("'%s'", addslashes($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        $query = "INSERT INTO {$tablename} ({$columns}) VALUES ({$values})";
        return $query;
    }
    public function save(Catalog_Model_Product $product)
    {
        $data = $product->getData();
        // print_r($data);
        if (isset($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
        }
        $sql = $this->insertSql($this->getTableName(), $data);
        $id = $this->getAdapter()->insert($sql);
        $product->setId($id);
        var_dump($id);
    }
    public function delete(Catalog_Model_Product $product)
    {
        $query = "DELETE FROM {$this->_tableName} WHERE {$this->_primaryKey} = {$product->getId()}";
        return $this->getAdapter()->delete($query);
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
}
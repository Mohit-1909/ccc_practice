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
    public function save(Core_Model_Abstract $abstract)
    {
        $data = $abstract->getData();
        // print_r($data);
        if (isset($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
        }
        $sql = $this->insertSql($this->getTableName(), $data);
        $id = $this->getAdapter()->insert($sql);
        $abstract->setId($id);
        var_dump($id);
    }
    public function delete(Core_Model_Abstract $abstract)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE {$this->getPrimaryKey()} = {$abstract->getId()}";
        return $this->getAdapter()->delete($query);
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
}
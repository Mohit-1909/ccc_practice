<?php
class Model_Category extends Model_Abstract
{
    public function __construct()
    {
    }
    public function add($data)
    {
        $sql = $this->getQueryBuider()->insert('ccc_category', $data);
        return $this->getQueryExecutor()->exec($sql);
    }
    public function upd($data, $where)
    {
        $sql = $this->getQueryBuider()->update('ccc_category', $data, $where);
        return $this->getQueryExecutor()->exec($sql);
    }
    public function dlt($where)
    {
        $sql = $this->getQueryBuider()->delete('ccc_category', $where);
        return $this->getQueryExecutor()->exec($sql);
    }

    public function fetch(array $columns, array $condition)
    {
        $sql = $this->getQueryBuider()->select('ccc_category', $columns, $condition);
        $result = $this->getQueryExecutor()->exec($sql);
        return $this->getQueryExecutor()->fetchAssoc($sql);
    }
}

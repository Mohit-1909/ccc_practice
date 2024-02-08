<?php
class Model_Product extends Model_Abstract
{
    public function __construct()
    {
    }
    public function add($data)
    {
        $sql = $this->getQueryBuilder()->insert('ccc_product', $data);
        return $this->getQueryExecutor()->exec($sql);
    }
    public function upd($data, $where)
    {
        $sql = $this->getQueryBuilder()->update('ccc_product', $data, $where);
        return $this->getQueryExecutor()->exec($sql);
    }
    public function dlt($where)
    {
        $sql = $this->getQueryBuilder()->delete('ccc_product', $where);
        return $this->getQueryExecutor()->exec($sql);
    }
}

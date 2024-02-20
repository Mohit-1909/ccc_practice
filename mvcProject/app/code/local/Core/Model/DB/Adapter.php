<?php

class Core_Model_DB_Adapter
{

    public $config = [
        "database" => "ccc_practice",
        "host" => "localhost",
        "password" => "",
        "user" => "root",
    ];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["database"]
            );

            // Check connection
            if (!$this->connect) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }

    }
    public function fetchAll($query)
    {
    }
    public function fetchPairs($query)
    {
    }
    public function fetchOne($query)
    {
    }
    public function fetchRow($query)
    {
        $row = [];
        $this->connect();
        $result = mysqli_query($this->connect, $query);
        while ($data = mysqli_fetch_assoc($result)) {
            // $id = key($data);
            // $row[$id] = current($data);
            $row = $data;
        }
        return $row;
    }
    public function insert($query)
    {
    }
    public function update($query)
    {
    }
    public function delete($query)
    {
    }
    public function query($query)
    {
    }


}
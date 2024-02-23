<?php

class Core_Model_DB_Adapter
{

    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "database" => "ccc_practice",
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
        return $this->connect;

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
            $row[] = $data;
        }
        return $row;
    }
    public function insert($query)
    {
        $result = mysqli_query($this->connect(), $query);
        if (!$result) {
            echo 'Error:' . mysqli_error($this->connect());
            exit();
        }
        return mysqli_insert_id($this->connect());
    }
    public function update($query)
    {
        $result = mysqli_query($this->connect(), $query);
        if (!$result) {
            echo 'Error:' . mysqli_error($this->connect());
            exit();
        }
        return $result;
    }
    public function delete($query)
    {
        $result = mysqli_query($this->connect(), $query);
        if (!$result) {
            echo 'Error:' . mysqli_error($this->connect());
            exit();
        }
        return $result;
    }
    public function query($query)
    {
    }


}
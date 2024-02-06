<pre>
<?php
class Lib_Sql_Query_Executor extends Lib_Sql_Connection
{
    public function exec($sql)
    {
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function fetchAssoc($result)
    {
        // $data = [];
        // print_r($result);
        $data_collection = new Model_Data_Collection();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data_collection->addData($row);
            }
        }
        // return count($data_collection->getData()) > 1 ? $data_collection->getData() : $data_collection->getData(0);
        return $data_collection;
    }
    public  function fetchRow($result)
    {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        }
    }
}
?>
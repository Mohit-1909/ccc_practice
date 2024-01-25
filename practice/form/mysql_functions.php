<?php


function makeConnection($servername,$username,$password,$dbName){
    $connection = mysqli_connect($servername, $username, $password, $dbName);

    if(mysqli_connect_errno()){
        echo "Failed";
        exit();
    }
    else{
        echo "Success";
        return $connection;
    }
}


function update($tablename, $where, $data)
{
    $c = $w = [];
    foreach ($data as $col => $val) {
        $c[] = "`$col` = '$val'";
    };
    foreach ($where as $col => $val) {
        $w[] = "`$col` = '$val'";
    };

    $c = implode(", ", $c);
    $w = implode(" AND ", $w);

    echo "UPDATE {$tablename} SET {$c} WHERE {$w};";
}


function insert($table_name,$data){
    $columns = $VALUES = [];
    foreach($data as $col => $val){
        $columns[] = "`$col`";
        $VALUES[] = "'". addslashes($val). "'";
    }
    $columns = implode(", ",$columns);
    $VALUES = implode(", ",$VALUES);
    echo "INSERT INTO {$table_name} ({$columns}) VALUES ({$VALUES})";
    //echo "UPDATE {$table_name} SET ";
    //UPDATE table_name SET column1=value1,column2=value2, WHERE column_name = col_name
    
}

function delete(string $tablename, array $where)
{
    $where_cond = [];
    foreach ($where as $col => $val) {
        $where_cond[] = "`$col` = '$val'";
    };
    $where_cond = implode(" AND ", $where_cond);
    echo "DELETE FROM {$tablename} WHERE {$where_cond};";
};

function select(string $table_name, array $columns, int $limit)
{
    global $connection;
    $query = "SELECT * FROM `{$table_name}` ORDER BY `index` DESC LIMIT {$limit};";
    return $connection->query($query);
};

insert("ABC",$_POST["group1"]);
//echo "<pre>";
print_r($_POST["group1"]);
print_r($_POST["group2"]);
die;
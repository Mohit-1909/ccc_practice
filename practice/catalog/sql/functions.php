<?php
require('connection.php');
// Make the connection variable global
$connection = makeConnection("localhost", "root", "", "ccc_practice");

function getPara(string $key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    } elseif (isset($_GET[$key])) {
        return $_GET[$key];
    }
};

function update($tablename, $where, $data)
{
    global $connection; // Make the connection variable global

    $c = $w = [];
    foreach ($data as $col => $val) {
        $c[] = "`$col` = '$val'";
    };
    foreach ($where as $col => $val) {
        $w[] = "`$col` = '$val'";
    };

    $c = implode(", ", $c);
    $w = implode(" AND ", $w);

    $query = "UPDATE {$tablename} SET {$c} WHERE {$w};";
    return $connection->query($query);
}

function insert($table_name, $data)
{
    global $connection; // Make the connection variable global

    $columns = $VALUES = [];
    foreach ($data as $col => $val) {
        $columns[] = "`$col`";
        $VALUES[] = "'" . addslashes($val) . "'";
    }
    $columns = implode(", ", $columns);
    $VALUES = implode(", ", $VALUES);
    $query = "INSERT INTO {$table_name} ({$columns}) VALUES ({$VALUES})";
    return $connection->query($query);
}

function delete(string $tablename, array $where)
{
    global $connection; // Make the connection variable global

    $where_cond = [];
    foreach ($where as $col => $val) {
        $where_cond[] = "`$col` = '$val'";
    };
    $where_cond = implode(" AND ", $where_cond);
    $query =  "DELETE FROM {$tablename} WHERE {$where_cond};";
    return $connection->query($query);
}

function select(string $table_name, string $pk, array $columns)
{
    global $connection; // Make the connection variable global

    // Convert array of columns to a comma-separated string
    $columnsStr = implode(', ', $columns);

    $query = "SELECT {$columnsStr} FROM `{$table_name}` ORDER BY `{$pk}` ;";
    return $connection->query($query);
}

function whereBasedSelect(string $table_name, array $where)
{
    global $connection;
    $where_cond = [];
    foreach ($where as $col => $val) {
        $where_cond[] = "$col = $val";
    };
    $where_cond = implode(" AND ", $where_cond);
    $query = "SELECT * FROM `{$table_name}` WHERE {$where_cond}";
    return $connection->query($query);
};

function addCategory($name)
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO ccc_category (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->close();
    $connection->close();
}

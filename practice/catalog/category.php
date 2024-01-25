<?php
include 'sql/functions.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    addCategory($name);
    header("Location: category_list.php");
    exit();
}
?>

<form method="post" action="">
    <label for="name">Category Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <input type="submit" value="Submit">
</form>
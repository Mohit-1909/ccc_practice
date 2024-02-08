<?php
include 'Lib/autoload.php';


class Ccc
{
    public static function init()
    {
        $frontController = new Controller_Front();
        echo $frontController->init();

    }
}
Ccc::init();
die();


$request = new Model_Request();
$action = $request->getQueryData('action');
$id = $request->getQueryData('product_id');
// if (!$request->isPost() && $action == null) {
if ($action == 'add' && $id == '') {
    if (!$request->isPost()) {
        $product = new View_Product();
        echo $product->toHtml();
    } else {
        $product = new Model_Product();
        $result = $product->add($request->getParams('pdata'));
        if ($result) {
            echo "<script>alert('Data inserted succefully')</script>";
            echo "<script>location.href='index.php'</script>";
        } else {
            echo "<script>alert('Product Id Already Exist.')</script>";
            $product = new View_Product();
            echo $product->toHtml();
        }
    }
} elseif ($action == 'edit' && $request->getQueryData('product_id')) {
    if (!$request->isPost()) {
        $product = new View_Product();
        echo $product->toHtml();
    } else {
        $product = new Model_Product();
        $result = $product->upd($request->getParams('pdata'), ['product_id' => $id]);
        if ($result) {
            echo "<script>alert('Data updated succefully')</script>";
            echo "<script>location.href='index.php'</script>";
        } else {
            echo "<script>alert('Error in data updating')</script>";
        }
    }
} elseif ($action == 'delete') {
    $product = new Model_Product();
    $result = $product->dlt(['product_id' => $id]);
    if ($result) {
        echo "<script>alert('Data deleted succefully')</script>";
        echo "<script>location.href='index.php'</script>";
    } else {
        echo "<script>alert('Error in data deleting')</script>";
    }
}elseif (!$request->isPost()) {
    $product = new View_Product_List();
    echo $product->toHtml();
}
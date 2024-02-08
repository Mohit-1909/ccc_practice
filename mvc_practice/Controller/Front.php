<?php

class Controller_Front
{
    public function init()
    {
        $request = new Model_Request;
        $requestUri = ($request->getRequestUri('REQUEST_URI'));
        // Extract the path from the request URI
        $requestPath = parse_url($requestUri, PHP_URL_PATH);
        // Remove unnecessary parts of the path
        $requestPath = ucwords(str_replace('/practice/mvc_practice/', '', $requestPath), "/");
        echo $requestPath . "<br>";
        // Construct the class name
        $className = "View_" . str_replace("/", "_", $requestPath);
        echo $className . "<br>";
        $layout = new $className();
        print_r($layout);
        $layout->toHtml();


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
        } elseif ($request->isPost()) {
            $product = new View_Product_List();
            echo $product->toHtml();
        } else {
            $product = new View_Product();
            echo $product->toHtml();
        }
    }
}



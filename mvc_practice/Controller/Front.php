<?php

class Controller_Front
{
    public function init()
    {
        $request = new Model_Request;
        $requestUri = ($request->getRequestUri('REQUEST_URI'));
        $requestUri = "View/" . ucwords(str_replace('/practice/mvc_practice/',  '', $requestUri), "/");
        $className = str_replace("/", "_", $requestUri);
        $layout = new $className();
        // echo $className;
        return $layout->toHtml();
    }
}

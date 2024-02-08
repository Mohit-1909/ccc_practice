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




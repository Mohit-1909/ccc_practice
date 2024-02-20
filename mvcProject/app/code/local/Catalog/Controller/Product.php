<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action
{
    public function newAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild("content");
        $productForm = $layout->createBlock("catalog/admin_product");
        $child->addChild("form", $productForm);
        // print_r($layout);
        // print_r($child);
        echo $layout->toHtml();
    }
}
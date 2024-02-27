<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function includeCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/list.css')
            ->addCss('product/form.css');
    }
    public function formAction()
    {
        $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild("content");
        $productForm = $layout->createBlock("catalog/admin_product_form");
        $child->addChild("form", $productForm);
        // echo "<pre>";
        // print_r($layout);
        // print_r($child);
        $layout->toHtml();
    }

    public function listAction()
    {
        $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild("content");
        $productList = $layout->createBlock("catalog/admin_product_list");
        $child->addChild("list", $productList);
        // echo "<pre>";
        // print_r($layout);
        // print_r($child);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        $product = Mage::getModel('catalog/product')
            ->setData($data);
        $product->save();
        // print_r($product);
    }
    public function deleteAction()
    {
        $productId = $this->getRequest()->getParams('product_id');
        Mage::getModel('catalog/product')
            ->load($productId)
            // ->setId($productId)
            ->delete();
    }

}
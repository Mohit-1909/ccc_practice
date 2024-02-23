<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function includeCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css')
            ->addCss('product/form.css');
    }
    public function formAction()
    {
        $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild("content");
        $productForm = $layout->createBlock("catalog/admin_product_form");
        $child->addChild("form", $productForm);
        // print_r($layout);
        // print_r($child);
        $layout->toHtml();
    }
    public function saveAction()
    {
        echo "<pre>";
        $data = $this->getRequest()->getParams('catalog_product');
        $product = Mage::getModel('catalog/product')
            ->setData($data);
        $product->save();
        print_r($product);
    }
    public function deleteAction()
    {
        echo "<pre>";
        $productId = $this->getRequest()->getParams('product_id');
        Mage::getModel('catalog/product')
            ->setId($productId)
            ->delete();
    }

}
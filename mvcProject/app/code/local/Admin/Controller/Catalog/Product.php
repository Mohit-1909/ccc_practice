<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    protected $_allowedAction = ['form'];
    // public function includeCss()
    // {
    //     $layout = $this->getLayout();
    //     $layout->getChild('head')
    //         ->addCss('product/list.css')
    //         ->addCss('product/form.css');
    // }
    public function formAction()
    {
        // $this->includeCss();
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/form.css')
            ->addJs('product/form.js');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_form');

        $child->addChild('form', $productForm);
        $layout->toHtml();
    }

    public function listAction()
    {
        // $this->includeCss();
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/list.css');
        $child = $layout->getChild('content');

        $productList = $layout->createBlock('catalog/admin_product_list');

        $child->addChild('list', $productList);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        Mage::getModel('catalog/product')
            ->setData($data)
            ->save();
    }
    public function deleteAction()
    {
        $productId = $this->getRequest()->getParams('product_id');
        Mage::getModel('catalog/product')
            ->load($productId)
            ->delete();
    }

}
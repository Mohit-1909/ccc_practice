<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    protected $_allowedAction = [];
    public function includeCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('category/form.css')
            ->addJs('category/form.js');
    }
    public function formAction()
    {
        $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $categoryForm = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $categoryForm);
        // echo "<pre>";
        // print_r($layout);
        // print_r($child);
        $layout->toHtml();
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('category/list.css');
        $child = $layout->getChild('content');

        $categoryList = $layout->createBlock('catalog/admin_category_list');

        $child->addChild('list', $categoryList);
        $layout->toHtml();
    }

    public function saveAction()
    {
        // echo "<pre>";
        $data = $this->getRequest()->getParams('catalog_category');
        Mage::getModel('catalog/category')
            ->setData($data)
            ->save();
    }
    public function deleteAction()
    {
        $categoryId = $this->getRequest()->getParams('category_id');
        Mage::getModel('catalog/category')
            ->setId($categoryId)
            ->delete();
    }
}
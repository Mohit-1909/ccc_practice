<?php

class Calculator_Controller_Calculator extends Core_Controller_Front_Action
{
    public function formAction()
    {
        // echo 1234;
        // echo "<pre>";
        $layout = $this->getLayout();
        // print_r($layout);
        $content = $layout->getChild('content');

        $productView = Mage::getBlock('calculator/calc');
        $content->addChild('view', $productView);
        // print_r($content);

        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('ccc_calculator');
        Mage::getModel('calculator/product')
            ->setData($data)
            ->save();
    }
    public function listAction()
    {
        // $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $productList = $layout->createBlock('calculator/admin_list');

        $child->addChild('list', $productList);
        $layout->toHtml();
    }
}
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
        $data = $this->getRequest()->getParams('');
        Mage::getModel('calculator/product')
            ->setData($data)
            ->save();
    }
}
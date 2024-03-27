<?php

class Licence_Controller_Index extends Core_Controller_Front_Action
{
    protected $_allowedAction = [];

    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/form.css')
            ->addJs('product/form.js');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('licence/form');

        $child->addChild('form', $productForm);
        $layout->toHtml();
    }
}
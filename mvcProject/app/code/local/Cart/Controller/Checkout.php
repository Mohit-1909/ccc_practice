<?php

class Cart_Controller_Checkout extends Core_Controller_Front_Action
{
    protected $_allowedAction = [];
    public function indexAction()
    {
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');
        if ($quoteId) {
            $layout = $this->getLayout();
            $content = $layout->getChild('content');
            $layout->getChild('head')->addCss('customer/address/form.css');
            $addressBlock = Mage::getBlock('customer/address');

            $content->addChild('form', $addressBlock);
            $layout->toHtml();
        } else {
            $this->setRedirect('catalog/product/view');
        }
    }
    public function methodAction()
    {
        $layout = $this->getLayout();
        $head = $layout->getChild('head');
        $head->addCss('cart/checkout/method.css');

        $methodBlock = Mage::getBlock('cart/checkout_method');
        $content = $layout->getChild('content');
        $content->addChild('form', $methodBlock);
        $layout->toHtml();
    }
}
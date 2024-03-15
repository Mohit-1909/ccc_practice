<?php

class Cart_Block_Checkout_Method extends Core_Block_Template{
    public function __construct()
    {
        $this->setTemplate('cart/checkout/method.phtml');
    }
    public function getPaymentMethods(){
        return [
            'upi' => 'UPI',
            'card' => 'Credit/Debit Card',
            'netbanking' => 'Net Banking',
            'cod' => 'Cash On Delivery',
            'paylater' => 'Pay Later'
        ];
    }
    public function getShippingMethods(){
        return [
            'same_day' => 'Same Day',
            'at_door_step' => 'At Door Step',
            'env_friendly' => 'Environment Friendly',
            'normal' => 'Normal' 
        ];
    }
    public function getQuoteId(){
        return Mage::getSingleton('core/session')->get('quote_id');
    }
}
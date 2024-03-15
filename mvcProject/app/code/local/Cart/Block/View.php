<?php

class Cart_Block_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/view.phtml');
    }
    public function getQuoteItems()
    {
        $session = Mage::getSingleton('core/session');
        $quoteId = $session->get('quote_id') ?? null;
        $products = Mage::getModel('sales/quote_item')
            ->getCollection()->addFieldToFilter('quote_id', $quoteId)
            ->getData();
        return $products;
        // return Mage::getSingleton('sales/quote')->getItemCollection();
    }
    public function getQuote()
    {
        $session = Mage::getSingleton('core/session');
        $quoteId = $session->get('quote_id') ?? null;
        $quote = Mage::getSingleton('sales/quote');
        return $quote->load($quoteId);
    }
    public function getDeleteUrl($id)
    {
        return $this->getUrl('sales/quote/delete?item_id=' . $id);
    }
}
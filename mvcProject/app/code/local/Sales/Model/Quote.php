<?php
class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/quote';
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
    }
    public function initQuote()
    {
        $quoteId = Mage::getSingleton('core/session')->get('quote_id', 0);
        if (!$quoteId) {
            $quote = Mage::getModel('sales/quote')
                ->setData(['tax_percent' => 0, 'grand_total' => 0])
                ->save();
            Mage::getSingleton('core/session')
                ->set('quote_id', $quote->getId());
            $quoteId = $quote->getId();
            $this->load($quoteId);
        } else {
            $this->load($quoteId);
        }
        return $this;
    }
    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')
            ->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }
    public function getCustomer()
    {
        return Mage::getModel('sales/quote_customer')
            ->getCollection()
            ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
    }
    protected function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += (int) $_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }
    public function addProduct($quoteData)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel('sales/quote_item')
                ->addItem(
                    $this,
                    $quoteData['product_id'],
                    $quoteData['qty'],
                    isset ($quoteData['item_id'])
                    ? $quoteData['item_id']
                    : null
                );
        }
        $this->save();
    }
    public function deleteProduct($itemId)
    {
        $quoteId = Mage::getSingleton('core/session')
            ->getId();
        $this->load($quoteId);

        if ($this->getId()) {
            Mage::getModel('sales/quote_item')->deleteItem($this, $itemId);
        }
        $this->save();
    }
    public function addAddress($addressData)
    {
        $quoteCustomerId = Mage::getSingleton('core/session')->get('quote_customer_id');
        $quoteCustomerModel = Mage::getModel('sales/quote_customer');
        $quoteCustomerModel->setData($addressData);
        if ($quoteCustomerId) {
            $quoteCustomerModel->addData('quote_customer_id', $quoteCustomerId);
            $quoteCustomerModel->save();
        } else {
            $id = $quoteCustomerModel->save()->getId();
            Mage::getSingleton('core/session')->set('quote_customer_id', $id);
        }
    }
    public function convert()
    {
        if ($this->getId()) {
            echo 123;
            $orderId = Mage::getModel('sales/order')
                ->setData($this->getData())
                ->removeData('quote_id')
                ->removeData('order_id')
                ->removeData('shipping_id')
                ->removeData('payment_id')
                ->save()
                ->getId();

            $this->addData('order_id', $orderId)->save();

            foreach ($this->getItemCollection() as $item) {

                Mage::getModel('sales/order_item')
                    ->setData($item->getData())
                    ->removeData('item_id')
                    ->removeData('quote_id')
                    ->addData('order_id', $orderId)
                    ->save();
            }
            if ($this->getCustomer()) {
                Mage::getModel('sales/order_customer')
                    ->setData($this->getCustomer()->getData())
                    ->removeData('quote_customer_id')
                    ->removeData('quote_id')
                    ->addData('order_id', $orderId)
                    ->save();
            }
            // Store order id in quote
            // error when quote_id not in session 
        }
    }
}


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
        // $quoteId = Mage::getSingleton("core/session")->get("quote_id");
        $session = Mage::getSingleton("core/session");
        $quoteId = $session->get("quote_id") ?? null;
        $this->load($quoteId);

        if (!$this->getId()) {
            $quote = Mage::getModel("sales/quote")
                ->setData(["tax_percent" => 8, "grand_total" => 0])
                ->save();
            Mage::getSingleton("core/session")->set("quote_id", $quote->getId());
            $quoteId = $quote->getId();
            $this->load($quoteId);
        }

        return $this;
    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }

    protected function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += (int)$_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }

    public function addProduct($request)
    {
        $this->initQuote();
        $quoteId = $this->getId();
        if (isset($quoteId)) {
            Mage::getModel('sales/quote_item')->addItem($this, $request['product_id'], $request['qty']);
        }
        $this->save();
    }

    public function updateProduct($request)
    {
        $this->initQuote();
        $quoteId = $this->getId();
        if (isset($quoteId)) {
            Mage::getModel('sales/quote_item')->updateItem($this, $request['product_id'], $request['qty']);
        }
        $this->save();
    }
    public function deleteProduct($request)
    {
        $this->initQuote();
        $quoteId = $this->getId();
        if (isset($quoteId)) {
            Mage::getModel('sales/quote_item')->deleteItem($this, $request['product_id']);
        }
        $this->save();
    }
}


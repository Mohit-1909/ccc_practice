<?php
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $requestData = $this->getRequest()->getParams('sales_quote');
        $request = ['product_id' => $requestData['product_id'], 'qty' => $requestData['qty']];
        $quote = Mage::getSingleton("sales/quote")
            ->addProduct($request);
    }
    public function updateAction()
    {
        $requestData = $this->getRequest()->getParams();
        $request = ['product_id' => $requestData['product_id'], 'qty' => $requestData['qty']];
        // print_r($request);
        $quote = Mage::getSingleton("sales/quote")
            ->updateProduct($request);
    }
    public function deleteAction()
    {
        $request = ['product_id' => $this->getRequest()->getParams('product_id')];
        $quote = Mage::getSingleton("sales/quote")
            ->deleteProduct($request);
    }
}
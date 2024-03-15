<?php
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    // public function addAction()
    // {
    //     $requestData = $this->getRequest()->getParams('sales_quote');
    //     $request = ['product_id' => $requestData['product_id'], 'qty' => $requestData['qty']];
    //     $quote = Mage::getSingleton("sales/quote")
    //         ->addProduct($request);
    // }
    public function addAction()
    {
        $quoteData = $this->getRequest()
            ->getParams('sales_quote');
        $this->ifNullRedirect([$quoteData], 'catalog/product/view');
        Mage::getSingleton("sales/quote")
            ->addProduct($quoteData);
        $this->setRedirect('cart');
    }
    public function updateAction()
    {
        $requestData = $this->getRequest()->getParams();
        $request = ['product_id' => $requestData['product_id'], 'qty' => $requestData['qty']];
        $quote = Mage::getSingleton("sales/quote")
            ->updateProduct($request);
    }
    // public function deleteAction()
    // {
    //     $request = ['product_id' => $this->getRequest()->getParams('product_id')];
    //     $quote = Mage::getSingleton("sales/quote")
    //         ->deleteProduct($request);
    // }
    public function deleteAction()
    {
        Mage::getSingleton("sales/quote")
            ->deleteProduct(
                $this->getRequest()
                    ->getParams('item_id')
            );
        $this->setRedirect('cart');
    }
    public function saveAddressAction()
    {
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');
        $addressData = $this->getRequest()->getParams('customer_address');
        $this->ifNullRedirect([$quoteId, $addressData], 'catalog/product/view');
        Mage::getModel('sales/quote')->addAddress($addressData);
        $this->setRedirect('cart/checkout/method');
    }
    public function placeOrderAction()
    {
        $shippingData = $this->getRequest()->getParams('quote_shipping_method');
        $paymentData = $this->getRequest()->getParams('quote_payment_method');
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');

        $this->ifNullRedirect([$quoteId], 'catalog/product/view');
        $quoteModel = Mage::getModel('sales/quote')->load($quoteId);

        $this->ifNullRedirect([$shippingData, $paymentData], 'cart/checkout/method');
        $shippingModel = Mage::getModel('sales/quote_shipping');
        $paymentModel = Mage::getModel('sales/quote_payment');

        $shippingModel
            ->setData($shippingData)
            ->save();
        $paymentModel
            ->setData($paymentData)
            ->save();

        $quoteModel->addData('payment_id', $paymentModel->getId())
            ->addData('shipping_id', $shippingModel->getId())
            ->save();

        $quoteModel->convert();
        echo "<script>alert('Order Placed Successfully')</script>";
        Mage::getSingleton('core/session')->remove('quote_id');
        $this->setRedirect('page');
    }
}
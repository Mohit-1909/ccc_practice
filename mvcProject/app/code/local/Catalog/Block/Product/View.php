<?php

class Catalog_Block_Product_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/product/view.phtml');
    }
    // public function getSingleProduct()
    // {
    //     return Mage::getModel('catalog/product')
    //         ->load($this->getRequest()->getParams('product_id'));
    // } if you want single vastu and not all.
    public function getItem()
    {
        $id = $this->getRequest()->getParams('product_id');
        if ($id) {
            $list = Mage::getModel("catalog/product")->getCollection()->addFieldToFilter('product_id', $id);
            return $list->getData();
        }
        $list = Mage::getModel("catalog/product")->getCollection();
        return $list->getData();
    }

}
<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    protected $_allowedAction = [];
    public function formAction()
    {
        // $this->includeCss();
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/form.css')
            ->addJs('product/form.js');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_form');

        $child->addChild('form', $productForm);
        $layout->toHtml();
    }
    // public function saveAction()
    // {
    //     $data = $this->getRequest()->getParams('catalog_product');
    //     Mage::getModel('catalog/product')
    //         ->setData($data)
    //         ->save();
    // }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        $imageFileData = $this->getRequest()->getFileData('image_link');
        $productFileImage = $imageFileData['name'];

        if (!empty ($productFileImage)) {
            $data['image_link'] = $productFileImage;
            $bannerMediaPath = Mage::getBaseDir('media/product/') . $productFileImage;

            if (!empty ($data['product_id'])) {
                $singleBannerData = Mage::getModel('catalog/product')->load($data['product_id']);
                unlink(Mage::getBaseDir('media/product/') . $singleBannerData->getBannerPath());
            }

            if (file_exists($bannerMediaPath)) {

                $pathInfo = pathinfo($bannerMediaPath);
                $fileExtension = isset ($pathInfo['extension']) ? '.' . $pathInfo['extension'] : '';
                $counter = 1;
                while (file_exists($pathInfo['dirname'] . '/' . $pathInfo['filename'] . $counter . $fileExtension)) {
                    $counter++;
                }
                $bannerName = $pathInfo['filename'] . $counter . $fileExtension;
                $data['image_link'] = $bannerName;
                $bannerMediaPath = $pathInfo['dirname'] . '/' . $bannerName;
            }

            move_uploaded_file(
                $imageFileData['tmp_name'],
                $bannerMediaPath
            );
        } else {
            $data['image_link'] = $this->getRequest()->getPostData('image_link');
        }

        Mage::getModel('catalog/product')->setData($data)
            ->save();

        $this->setRedirect('admin/catalog_product/list');
    }
    public function listAction()
    {
        // $this->includeCss();
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/list.css');
        $child = $layout->getChild('content');

        $productList = $layout->createBlock('catalog/admin_product_list');

        $child->addChild('list', $productList);
        $layout->toHtml();
    }
    public function deleteAction()
    {
        $productId = $this->getRequest()->getParams('product_id');
        Mage::getModel('catalog/product')
            ->load($productId)
            ->delete();
    }
}
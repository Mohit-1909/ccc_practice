<?php

class Customer_Controller_Account extends Core_Controller_Front_Action
{
    protected $_allowedAction = ['register', 'login'];
    // public function init()
    // {
    //     if (
    //         !in_array($this->getRequest()->getActionName(), $this->_allowedAction) &&
    //         !Mage::getSingleton('core/session')->get('logged_in_customer_id')
    //     ) {
    //         $this->setRedirect('customer/account/login');
    //     }
    // }
    public function registerAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('customer/account/form.css');
        $layout->removeChild('header')
            ->removeChild('footer');

        $content = $layout->getChild("content");

        $registerForm = Mage::getBlock('customer/account_register');
        $content->addChild('form', $registerForm);

        $layout->toHtml();
    }
    public function saveAction()
    {
        $registerCredentials = $this->getRequest()->getParams('customer');
        $checkCustomerExist = Mage::getModel('customer/customer')
            ->getCollection()
            ->addFieldToFilter('customer_email', $registerCredentials['customer_email'])
            ->getData();
        $address = Mage::getBaseUrl("customer/account");
        if (count($checkCustomerExist)) {
            echo "<script>
                alert('email already exist');
                location. href= '{$address}/register';
            </script>";
        } else {
            $customerAccount = Mage::getModel('customer/customer')
                ->setData($registerCredentials)->save();
            echo "<script>
                alert('Register successfully');
                location. href= '{$address}/login';
            </script>";
            print_r($customerAccount);
        }
    }
    public function loginAction()
    {
        if ($this->getRequest()->isPost()) {
            $loginData = $this->getRequest()->getParams('customer');

            $loginData = Mage::getModel('customer/customer')
                ->getCollection()
                ->addFieldToFilter('customer_email', $loginData['customer_email'])
                ->addFieldToFilter('password', $loginData['password'])
                ->getData();

            if (count($loginData)) {
                Mage::getSingleton('core/session')
                    ->set('logged_in_customer_id', $loginData[0]->getId());
                $this->setRedirect('customer/account/dashboard');
            } else {
                $this->setRedirect('customer/account/login');
            }
        } else {
            $layout = $this->getLayout();
            $layout->getChild('head')
                ->addCss('customer/account/form.css');
            $layout->removeChild('header')
                ->removeChild('footer');

            $content = $layout->getChild("content");

            $loginForm = Mage::getBlock('customer/account_login');
            $content->addChild('form', $loginForm);

            $layout->toHtml();
        }
    }
    public function dashboardAction()
    {
        $customerId = Mage::getSingleton('core/session')
            ->get('logged_in_customer_id');

        $address = Mage::getBaseUrl('customer/account');
        if ($customerId) {
            $customerData = Mage::getModel('customer/customer')
                ->load($customerId);

            $layout = $this->getLayout();
            $content = $layout->getChild("content");

            // $dashboard = Mage::getBlock('customer/account_dashboard');
            // $content->addChild('form', $dashboard);

            print_r($customerData);
            $layout->toHtml();
        }
    }
    public function forgotpasswordAction()
    {
        if ($this->getRequest()->isPost()) {
            $customerData = $this->getRequest()->getParams('customer');

            $customerData = Mage::getModel('customer/customer')
                ->getCollection()
                ->addFieldToFilter('customer_email', $customerData['customer_email'])
                ->getData();

            print_r($customerData);
        } else {
            $layout = $this->getLayout();
            $layout->getChild('head')
                ->addCss('customer/account/form.css');
            $layout->removeChild('header')
                ->removeChild('footer');

            $content = $layout->getChild("content");

            $forgotpasswordForm = Mage::getBlock('customer/account_forgotpassword');
            $content->addChild('form', $forgotpasswordForm);

            $layout->toHtml();
        }
    }
}
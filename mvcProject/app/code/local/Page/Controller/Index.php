<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        // print_r($layout);
        // die;
        // $layout->getChild('head')->addJs('js/navigation.js');
        // $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css');

        $banner = $layout->createBlock('banner/banner')
            ->setTemplate('banner/banner.phtml');
        $layout->getChild('content')
            ->addChild('banner', $banner);
        // ->addChild('banner1', $banner);

        $layout->toHtml();
        // echo $layout;
        // echo dirname(__FILE__);
    }
}
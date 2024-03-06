<?php

class Calculator_Block_Calc extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('calculator/form.phtml');
    }

    public function getOptions()
    {
        $embeddings = [
            'add' => '+',
            'minus' => '-',
            'divide' => '/',
            'multiply' => '*',
            'percenatage' => '%',
        ];
        return $embeddings;
    }


}
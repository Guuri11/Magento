<?php


namespace UdemyMagento\FrontendModule\Block;


use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    public function getHelloWorld(){
        return 'Hello World';
    }

    public function getArray(){
        return ['key1'=>'val1','key2'=>'val2','key3'=>'val3'];
    }

}

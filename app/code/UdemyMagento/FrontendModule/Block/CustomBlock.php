<?php


namespace UdemyMagento\FrontendModule\Block;


use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getHelloWorld(){
        return 'Hello World';
    }

    public function getArray(){
        return ['key1'=>'val1','key2'=>'val2','key3'=>'val3'];
    }
}

<?php


namespace UdemyMagento\FrontendModule\ViewModel;


use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class View implements ArgumentInterface
{
    protected $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getHelloWorld(){
        return 'Hello World';
    }

    public function getArray(){
        return ['key1'=>'val1','key2'=>'val2','key3'=>'val3'];
    }

    public function getProduct(){
        return $this->repository->get('24-MB01')->getName();
    }
}

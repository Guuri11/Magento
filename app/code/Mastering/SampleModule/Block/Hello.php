<?php


namespace Mastering\SampleModule\Block;


use Magento\Framework\View\Element\Template;
use Mastering\SampleModule\Model\ResourceModel\Item\Collection;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $factory;

    public function __construct(CollectionFactory $factory,Template\Context $context, array $data = [])
    {
        $this->factory = $factory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item[]
     */
    public function getItems(){
        return $this->factory->create()->getItems();
    }
}

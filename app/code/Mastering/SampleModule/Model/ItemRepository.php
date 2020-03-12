<?php


namespace Mastering\SampleModule\Model;


use Mastering\SampleModule\Api\ItemRepositoryInterface;
use \Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    private $factory;

    public function __construct(CollectionFactory $factory)
    {
        $this->factory = $factory;

    }

    public function getList()
    {
        return $this->factory->create()->getItems();
    }

}

<?php


namespace Mastering\SampleModule\Model\ResourceModel\Item\Grid;


use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as ManagerInterface;
use Psr\Log\LoggerInterface as Logger;

class Collection extends SearchResult
{
    public function __construct(EntityFactory $entityFactory, Logger $logger, FetchStrategy $fetchStrategy,
                                ManagerInterface $eventManager, $mainTable = 'mastering_sample_item',
                                $resourceModel = 'Mastering\SampleModule\Model\ResourceModel\Item')
    {
        parent::__construct($entityFactory, $logger, $fetchStrategy,
            $eventManager,$mainTable, $resourceModel);
    }

}

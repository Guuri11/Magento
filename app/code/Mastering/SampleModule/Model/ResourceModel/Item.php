<?php


namespace Mastering\SampleModule\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
    // table resource and primary key
    $this->_init('mastering_sample_item','id');
    }
}

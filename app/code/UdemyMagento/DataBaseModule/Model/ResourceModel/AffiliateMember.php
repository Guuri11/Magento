<?php


namespace UdemyMagento\DataBaseModule\Model\ResourceModel;



use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AffiliateMember extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('affiliate_member','entity_id');
    }
}

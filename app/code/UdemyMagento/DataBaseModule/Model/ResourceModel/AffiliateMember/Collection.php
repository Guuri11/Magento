<?php


namespace UdemyMagento\DataBaseModule\Model\ResourceModel\AffiliateMember;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use UdemyMagento\DataBaseModule\Model\AffiliateMember;
use UdemyMagento\DataBaseModule\Model\ResourceModel\AffiliateMember as AffiliateRM;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        parent::_construct(); // TODO: Change the autogenerated stub
        $this->_init(AffiliateMember::class,AffiliateRM::class);
    }
}

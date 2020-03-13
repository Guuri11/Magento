<?php


namespace Mastering\SampleModule\Controller\Adminhtml\Item;


use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class NewAction extends Action
{

    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

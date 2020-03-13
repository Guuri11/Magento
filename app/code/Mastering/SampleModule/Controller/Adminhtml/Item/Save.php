<?php


namespace Mastering\SampleModule\Controller\Adminhtml\Item;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Mastering\SampleModule\Model\ItemFactory;

class Save extends Action
{
    private $factory;

    public function __construct(Context $context, ItemFactory $factory)
    {
        $this->factory = $factory;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->factory->create()
            ->setData($this->getRequest()->getPostValue()['general'])
            ->save();

        return $this->resultRedirectFactory->create()->setPath('mastering/index/index');
    }

}

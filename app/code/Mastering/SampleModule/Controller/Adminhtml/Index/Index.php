<?php


namespace Mastering\SampleModule\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /**
         * @var \Magento\Framework\Controller\Result\Raw $result
         */
        // With this we can display the content with the way that we want to.
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello Admin');
        return $result;
    }
}

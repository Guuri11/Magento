<?php


namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        /**
         * @var \Magento\Framework\Controller\Result\Raw $result
         */
        /*// With this we can display the content with the way that we want to.
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello World');
        return $result;*/

        // renders de frontend layout
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}

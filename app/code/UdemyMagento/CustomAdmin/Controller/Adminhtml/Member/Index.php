<?php


namespace UdemyMagento\CustomAdmin\Controller\Adminhtml\Member;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $page;

    public function __construct(PageFactory $factory,Context $context)
    {
        $this->page = $factory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return $this->page->create();
    }
}

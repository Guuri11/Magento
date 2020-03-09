<?php


namespace UdemyMagento\RequestFlow\Controller\Page;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\RedirectFactory;

class ResponseType extends Action
{
    protected $pageFactory;
    protected $jsonFactory;
    protected $raw;
    protected $forwardFactory;
    protected $redirectFactory;

    public function __construct(Context $context, PageFactory $pageFactory, JsonFactory $jsonFactory, Raw $raw,
                                ForwardFactory $forwardFactory, RedirectFactory $redirectFactory)
    {
        // Page response type
        $this->pageFactory = $jsonFactory;
        // JSON response type
        $this->jsonFactory = $jsonFactory;
        // Raw response type
        $this->raw = $raw;
        // Forward response type
        $this->forwardFactory = $forwardFactory;
        // Redirect response type
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        // Page response type
        //return $this->pageFactory->create();

        // JSON response type
        // return $this->jsonFactory->create()->setData(['key'=

        // Raw response type
        //return $this->raw->setContents('hello world');

        // Forward response type
        //$result = $this->forwardFactory->create();
        //$result->setModule('route-error')->setController('page')->forward('customnoroute');
        //return $result;

        // Redirect response type
        $result = $this->redirectFactory->create();
        return $result->setPath('route-error/page/customnoroute');
    }
}

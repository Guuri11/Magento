<?php


namespace UdemyMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use UdemyMagento\FirstModule\Api\PencilInterface;
use UdemyMagento\FirstModule\Api\BookInterface;
use \Magento\Catalog\Api\ProductRepositoryInterface;
use UdemyMagento\FirstModule\Model\HeavyService;
use UdemyMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected $bookInterface;
    protected $productRepository;
    protected $pencilFactory;
    protected $productFactory;
    protected $_eventManager;
    protected $http;
    protected $heavyService;

    public function __construct(Context $context,
                                PencilInterface $pencilInterface,
                                BookInterface $bookInterface,
                                ProductRepositoryInterface $productRepository,
                                ProductFactory $productFactory,
                                PencilFactory $pencilFactory,
                                ManagerInterface $manager,
                                Http $http,
                                HeavyService $heavyService)
    {
        $this->pencilInterface = $pencilInterface;
        $this->bookInterface = $bookInterface;
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
        $this->pencilFactory = $pencilFactory;
        $this->_eventManager = $manager;
        $this->http = $http;
        $this->heavyService = $heavyService;

        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute ()
    {

        // The object heavyService will be instantiated if the function printSelf is called, because of the proxy
       $id = $this->http->getParam('id',0);
       if ($id == 1){
           $this->heavyService->printSelf();
       }else{
           echo 'Heavy Service not used';
       }

    }

}

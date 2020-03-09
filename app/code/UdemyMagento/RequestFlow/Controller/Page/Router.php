<?php


namespace UdemyMagento\RequestFlow\Controller\Page;


use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;
use Magento\Framework\App\ActionFactory;

class Router implements RouterInterface
{
    protected $actionFactory;

    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * @inheritDoc
     */
    public function match(RequestInterface $request)
    {
        $path = trim($request->getPathInfo(),'/');
        $paths = explode('-',$path);
        $request->setModuleName($paths[0]);
        $request->setControllerName($paths[1]);
        $request->setActionName($paths[2]);

        return $this->actionFactory->create('Magento\Framework\App\Action\Forward',['request'=>$request]);
    }
}

<?php


namespace UdemyMagento\RequestFlow\Controller\Page;


use Magento\Framework\App\Router\NoRouteHandlerInterface;

class CustomNoRouteHandler implements NoRouteHandlerInterface
{

    /**
     * @inheritDoc
     */
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setRouteName('route_error')->setControllerName('page')->setActionName('customnoroute');
        return true;
    }
}

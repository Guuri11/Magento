<?php


namespace UdemyMagento\RequestFlow\Controller\Page;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class CustomNoRoute extends Action
{

    /**
     * @inheritDoc
     */
    public function execute()
    {
        echo 'Custom 404 page';
    }
}

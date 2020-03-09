<?php


namespace UdemyMagento\FirstModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomObserver implements ObserverInterface
{

    /**
     * @inheritDoc
     */
    public function execute(Observer $observer)
    {
       $message = $observer->getData('greeting');
       $message->setGreeting('Good evening');
    }
}

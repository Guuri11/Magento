<?php


namespace UdemyMagento\CustomAdmin\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Action
{
    // This variable will contain the configuration from the admin system
    protected $config;

    public function __construct(ScopeConfigInterface $config,Context $context)
    {
        $this->config = $config;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        echo $this->config->getValue('First_Section/First_Group/First_Field');
        echo '<br/>'.$this->config->getValue('First_Section/First_Group/Second_Field');
        echo '<br/>'.$this->config->getValue('First_Section/First_Group/Third_Field');
        echo '<br/>'.$this->config->getValue('First_Section/First_Group/Fourth_Field');
    }
}

<?php


namespace UdemyMagento\DataBaseModule\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * @inheritDoc
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name'=>'Sergio','address'=>'C/Xabia nº14, Ondara(Alicante)','status'=>true]
        );
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name'=>'Miguel','address'=>'C/Falsa nº123, Ondara(Alicante)']
        );

        $setup->endSetup();
        // run php/magento setup:upgrade
    }
}

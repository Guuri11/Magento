<?php


namespace UdemyMagento\DataBaseModule\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use function GuzzleHttp\Psr7\str;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * @inheritDoc
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(),'0.1.2','<')){
            $setup->getConnection()->insert(
                $setup->getTable('affiliate_member'),
                ['name'=>'Alex','address'=>'C/Real nº321, Ondara(Alicante)','status'=>true,'phone_number'=>'654234678']
            );
        }

        $setup->endSetup();
    }
}

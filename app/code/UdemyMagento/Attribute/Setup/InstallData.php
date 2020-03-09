<?php


namespace UdemyMagento\Attribute\Setup;


use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $setupFactory;

    public function __construct(EavSetupFactory $setupFactory)
    {
        $this->setupFactory = $setupFactory;
    }

    /**
     * @inheritDoc
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $eavSetup = $this->setupFactory->create(['setup'=>$setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'custom_eav',
            [
                'group'=>'Content',
                'type'=>'text',
                'global'=>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible'=>true,
                'required'=>true,
                'searchable'=>false,
                'used_in_product_listing'=>true,
                'label'=>'Custom EAV',
                'input'=>'text'
            ]
        );

        $eavSetup = $this->setupFactory->create(['setup'=>$setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'member_type',
            [
                'group'=>'Content',
                'type'=>'text',
                'backend'=>\UdemyMagento\Attribute\Model\Config\Validation::class, // validation
                'global'=>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible'=>true,
                'required'=>false,
                'searchable'=>false,
                'used_in_product_listing'=>true,
                'label'=>'Member Type',
                'input'=>'select',
                'source'=>\UdemyMagento\Attribute\Model\Config\Options::class
            ]
        );

        $setup->endSetup();
    }
}

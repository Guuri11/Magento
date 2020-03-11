<?php


namespace Mastering\SampleModule\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * @inheritDoc
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('mastering_sample_item')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity'=>true, 'nullable'=>false,'primary'=>'true'],
            'Item name'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false,],
            'Item name'

        )->addIndex(    // The index will increase the query optimization
            $setup->getIdxName('mastering_sample_item',['name']),
            ['name']
        )->setComment('Sample Items');

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}

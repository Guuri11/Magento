<?php


namespace UdemyMagento\DataBaseModule\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * @inheritDoc
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // Get the database connection and create a new table with the columns
        $table = $setup->getConnection()->newTable(
            $setup->getTable('affiliate_member')
        )->addColumn(
            'entity_id',
            Table::TYPE_INTEGER,
            null,
            ['identity'=>true,'nullable'=>false,'primary'=>true],
            'Member id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nulleable'=>false],
            'Name of the member'
        )->addColumn(
            'address',
            Table::TYPE_TEXT,
            255,
            ['nulleable'=>false],
            'Address of the member'
        )->addColumn(
            'status',
            Table::TYPE_BOOLEAN,
            10,
            ['nulleable'=>false,'default'=>false],
            'Status'
        )->addColumn(
            'created_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nulleable'=>false,'default'=>Table::TIMESTAMP_INIT],
            'Time created'
        )->addColumn(
            'updated_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nulleable'=>false,'default'=>Table::TIMESTAMP_INIT_UPDATE],
            'Time updated'
        )->setComment('Affiliate member table');

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}

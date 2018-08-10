<?php
namespace PME\TestModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
            $table = $setup->getConnection()
                -> newTable('test_table');

            $table -> addColumn(
                'entity_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'auto_increment'    =>  true,
                    'unsigned'          =>  true,
                    'nullable'          =>  false,
                    'primary'           =>  true
                ],
                'Test Comment for Entity id'
            )
            -> addColumn('name', // column name
                Table::TYPE_TEXT, //type
                254, //length
                [
                    'nullable'          =>  false
                ], // options
                'Test name' // comment
            );
            $setup->getConnection()
                -> createTable(
                    $table
                );

        $setup->endSetup();
    }
}

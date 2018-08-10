<?php
namespace PME\TestModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TestTable extends AbstractDb {

    protected function _construct()
    {
        $this->_init('test_table', 'entity_id');
    }
}

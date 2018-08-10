<?php
namespace PME\TestModule\Model\ResourceModel\TestTable;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    public function _construct() {
        $this->_init('PME\TestModule\Model\TestTable','PME\TestModule\Model\ResourceModel\TestTable');
    }

}

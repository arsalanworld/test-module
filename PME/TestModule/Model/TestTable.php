<?php
namespace PME\TestModule\Model;

class TestTable extends  \Magento\Framework\Model\AbstractModel {

    public function _construct()
    {
        $this->_init('PME\TestModule\Model\ResourceModel\TestTable');
    }


    public function getName() {
        return $this->getData('name');
    }

    public function save() {
        $eventDispatcher = \Magento\Framework\App\ObjectManager::getInstance()
            ->create('\Magento\Framework\Event\ManagerInterface');
        $eventDispatcher->dispatch('testTable_model_save_before',[
            'data'  =>  $this->getData()
        ]);
        return parent::save();
    }
}

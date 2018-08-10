<?php
namespace PME\TestModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class AddContent extends Action {

    protected $testTableModel;

    protected $testTableCollection;

    protected $myClassModel;

    public function __construct(
        Context $context,
        \PME\TestModule\Model\TestTable $testTable,
        \PME\TestModule\Model\ResourceModel\TestTable\Collection $collection,
        \PME\TestModule\Model\MyClass $myClass
    ) {
        parent::__construct($context);
        $this->testTableModel = $testTable;
        $this->testTableCollection = $collection;
        $this->myClassModel = $myClass;
    }

    public function execute()
    {
        echo $this->testTableModel->setName('some blah blah')->save()->getId();
        /*$m = $this->testTableCollection
            -> addFieldToFilter('entity_id', [
                'like'    =>  '%2%'
            ])->getFirstItem();

        echo 'id: '.$m->getEntityId().'<br />';
        echo 'name: '.$m->getName().'<br />';*/
        /*foreach ($m as $item) {
            echo 'Id: '. $item->getEntityId().'<br />';
            echo 'Name: '. $item->getName().'<br />';
            echo 'Id: '. $item->getData('entity_id').'<br />';
            echo 'Name: '. $item->getData('name').'<br />';
        }*/
        $this->_eventManager->dispatch('pme_test_add_before', ['test_model' => $this->testTableModel]);
        /*$test = $this->testTableModel
                    -> load(3);

        echo 'id: '.$test->getEntityId().'<br />';
        echo 'name: '.$test->getName().'<br />';*/

    }
}


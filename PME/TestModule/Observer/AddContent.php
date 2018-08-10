<?php
namespace PME\TestModule\Observer;


use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class AddContent implements ObserverInterface {


    public function execute(\Magento\Framework\Event\Observer $observer)
    {
       $testModel = $observer->getEvent()->getTestModel();
       $_collection = $testModel->getCollection();

       /*if ($_collection->count()) {
           foreach ($_collection as $item) {
               echo "record: <br />";
               echo "entity Id: ". $item->getEntityId().'<br />';
               echo "Name: ". $item->getName().'<br />';
           }
       }
        exit;*/
    }
}


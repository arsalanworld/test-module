<?php
namespace PME\TestModule\Observer\Action;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class PreDispatch implements ObserverInterface {

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $params = $observer->getEvent()->getRequest()->getParams();
        if (!empty($params)) {
            foreach ($params as $key  => $value) {

            }
            echo "next loop<br /><br />";
            foreach ($params as $value) {
                echo "value: ". $value.'<br />';
            }
        }
    }
}

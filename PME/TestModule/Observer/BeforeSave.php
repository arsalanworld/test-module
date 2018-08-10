<?php
namespace PME\TestModule\Observer;


use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class BeforeSave implements ObserverInterface {

    protected $_loggerInterface;

    public function __construct(
        \Psr\Log\LoggerInterface $loggerInterface
    ) {
        $this->_loggerInterface = $loggerInterface;
    }


    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $testModel = $observer->getEvent()->getData();

        $this->_loggerInterface->debug('debug::savedata', [
            $testModel
        ]);
    }
}

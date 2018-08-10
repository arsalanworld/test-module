<?php
namespace PME\TestModule\Block;

class Test extends \Magento\Framework\View\Element\Template {

    protected $_testModel;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \PME\TestModule\Model\TestTable $testTable,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_testModel = $testTable;
    }

    public function getList() {
        return $this->_testModel->getCollection();
    }


    public function getActionUrl() {
        return $this->getBaseUrl().'testa/test/posttest';
    }

}

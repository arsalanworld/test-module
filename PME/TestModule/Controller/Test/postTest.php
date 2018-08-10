<?php
namespace PME\TestModule\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use PME\TestModule\Model\TestTable;

class PostTest extends Action {

    protected $_testModel;

    public function __construct(
        Context $context,
        TestTable $testTable
    ) {
        parent::__construct($context);
        $this->_testModel = $testTable;
    }

    public function execute() {
        $data = $this->getRequest()->getPost();
        $message = '';
        $error = true;
        if (count($data)) {
            if (isset($data['name'])) {
                $this->_testModel->setName($data['name']);
                $id = $this->_testModel->save()->getId();
                if ($id) {
                    $message = 'Successfully Added';

                    $error = false;
                } else {
                    $message = "Failed";
                }
            } else {
                $message = "Please provide Data";
            }
        } else {
            $message = "Please provide Data";
        }
        if (!$error) {
            $this->messageManager->addSuccess($message);
        } else {
            $this->messageManager->addError($message);
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('testa/test/index');
        return $resultRedirect;
    }
}

<?php
namespace PME\TestModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class Index extends Action {

    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}

<?php
namespace PME\TestModule\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class Index extends Action {

    public function execute() {
        $this->_view->loadLayout()
            -> renderLayout();
    }
}

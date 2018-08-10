<?php
namespace PME\TestModule\Controller\Index;

use Magento\Framework\App\ResponseInterface;

class BlockListing extends \Magento\Framework\App\Action\Action {

    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view
            -> renderLayout();
    }
}

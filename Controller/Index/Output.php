<?php

namespace Modules\FirstModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Output extends Action
{
    public function execute()
    {
        /** @var $result Page */
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

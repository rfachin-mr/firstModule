<?php
namespace Modules\FirstModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Modules\FirstModule\Helper\Data;


class Config extends Action
{
    public function __construct(Context $context, Data $helperData){
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {
        $enable =$this->helperData->getGeneralConfig('enable');
        if (!$enable){
            $this->_redirect('no-route/');
        }  /** @var $result Page */
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

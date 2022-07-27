<?php

namespace Modules\FirstModule\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use \Modules\FirstModule\Helper\Data;

class Config extends Template {

    protected $helperData;

    public function __construct(Context $context, Data $helperData){
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

//    public function checkEnable(){
//        $enable = $this->helperData->getGeneralConfig('enable');
//        if (!$enable){
//            header("Location: https://roberto.local/no-route");
//            die();
//        } else {
//            echo "enable";
//        }
//    }

    public function getText() {
        return $this->helperData->getGeneralConfig('display_text');
    }
}

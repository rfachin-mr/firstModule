<?php
namespace Modules\FirstModule\Plugin;

use Codeception\Step\Action;
use Magento\Framework\App\Action\Context;


use Magento\Catalog\Model\Product;
use Modules\FirstModule\Helper\Data;

class PricePlugin extends Action
{
    protected $helperData;

    public function __construct(Context $context, Data $helperData)
    {
        $this->helperData = $helperData;
        return parent::__construct($context);
    }


    public function aroundGetPrice(Product $subject, callable $proceed)
    {
        $enable = $this->helperData->getConfigValue('aktivieren/akt_general/akt_enable');
        $percent = $this->helperData->getConfigValue('aktivieren/akt_general/akt_percent');
        if ($enable) {
            $result = $proceed() * $percent;
        } else {
            $result = $proceed();
        }
        return $result;
    }
}

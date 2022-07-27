<?php
namespace Modules\FirstModule\Plugin;

use Magento\Catalog\Model\Product;

class NamePlugin {
    public function afterGetName(Product $subject, $result) {
        return $result.' ######';
    }
}

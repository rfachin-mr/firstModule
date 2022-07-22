<?php
namespace Modules\FirstModule\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class People extends AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('Modules_FirstModule_people', 'person_id');
    }

}

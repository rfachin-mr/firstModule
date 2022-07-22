<?php
namespace Modules\FirstModule\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class XmlPeople extends AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('xml_Modules_FirstModule_people', 'person_id');
    }

}

<?php

namespace Modules\FirstModule\Model\ResourceModel\People;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'person_id';
    protected $_eventPrefix = 'modules_firstmodule_people_collection';
    protected $_eventObject = 'people_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Modules\FirstModule\Model\People', 'Modules\FirstModule\Model\ResourceModel\People');
    }

}

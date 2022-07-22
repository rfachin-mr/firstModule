<?php

namespace Modules\FirstModule\Model\ResourceModel\XmlPeople;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'person_id';
    protected $_eventPrefix = 'xml_modules_firstmodule_people_collection';
    protected $_eventObject = 'xml_people_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Modules\FirstModule\Model\XmlPeople', 'Modules\FirstModule\Model\ResourceModel\XmlPeople');
    }

}

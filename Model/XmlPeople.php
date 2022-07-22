<?php
namespace Modules\FirstModule\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;

class XmlPeople extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'xml_modules_firstmodule_people';

    protected $_cacheTag = 'xml_modules_firstmodule_people';

    protected $_eventPrefix = 'xml_modules_firstmodule_people';

    protected function _construct()
    {
        $this->_init('Modules\FirstModule\Model\ResourceModel\XmlPeople');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}

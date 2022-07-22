<?php
namespace Modules\FirstModule\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;


class People extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'modules_firstmodule_people';

    protected $_cacheTag = 'modules_firstmodule_people';

    protected $_eventPrefix = 'modules_firstmodule_people';

    protected function _construct()
    {
        $this->_init('Modules\FirstModule\Model\ResourceModel\People');
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

    public function setName(string $name): People
    {
        return $this->setData('name', $name);
    }

    public function setPosition(string $person_position): People
    {
        return $this->setData('person_position', $person_position);
    }

    public function setAlive(bool $alive): People
    {
        return $this->setData('alive', $alive);
    }

    public function setPic(string $facePic): People
    {
        return $this->setData('face_pic', $facePic);
    }



    public function getNumber(){
        return $this->getData('person_id');
    }

    public function getName()
    {
        return $this->getData('name');
    }

    public function getPosition()
    {
        return $this->getData('person_position');
    }

    public function getAlive()
    {
        return $this->getData('alive');
    }

    public function getPic()
    {
        return $this->getData('face_pic');
    }

    public function getCreate()
    {
        return $this->getData('created_at');
    }

    public function getUpdated()
    {
        return $this->getData('updated_at');
    }
}

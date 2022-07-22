<?php

namespace Modules\FirstModule\ViewModel;


use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Modules\FirstModule\Model\PeopleFactory;
use Modules\FirstModule\Model\ResourceModel\People;

class NewViewModel implements ArgumentInterface
{
    /**
     * @var PeopleFactory
     */
    private $peopleFactory;
    /**
     * @var People
     */
    private $resource;

    public function __construct(PeopleFactory $peopleFactory, People $resource)
    {
        $this->peopleFactory = $peopleFactory;
        $this->resource = $resource;
    }

    public function getTitle()
    {

        return __('Hello World!');

    }


    /**
     * @throws AlreadyExistsException
     */
    public function setPeopleData()
    {
        /** @var $people \Modules\FirstModule\Model\People * */
        $people = $this->peopleFactory->create();
        $people->setName("Adolf Hitler");
        $people->setPosition("Putzkraft");
        $people->setAlive(true);
        $people->setPic("https://i.redd.it/9fakh6i2mvz81.jpg");

        $this->resource->save($people);
    }

    public function getPeopleData(): string
    {
        $people = $this->peopleFactory->create();
        $this->resource->load($people, '7', 'person_id');

        $id = $people->getNumber();
        $name = $people->getName();
        $position = $people->getPosition();
        $alive = $people->getAlive();
        $pic = $people->getPic();
        $created = $people->getCreate();
        $updated = $people->getUpdated();


        return "<td>$id</td><td>$name</td><td>$position</td><td>$alive</td><td>$pic</td><td>$created</td><td>$updated</td>";

    }
}

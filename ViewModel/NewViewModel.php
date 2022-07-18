<?php
namespace Modules\FirstModule\ViewModel;


class NewViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function getTitle()
    {

        return __('Hello World!');

    }
}

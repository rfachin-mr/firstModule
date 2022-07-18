<?php
///**
// * Copyright © Magento, Inc. All rights reserved.
// * See COPYING.txt for license details.
// */
//
//namespace Modules\firstModule\Controller\Hello;
//
//use Magento\Framework\App\Action\Action;
//use Magento\Framework\App\Action\Context;
//use Magento\Framework\Controller\Result\JsonFactory;
//use Magento\Framework\Controller\ResultInterface;
//
//class World extends Action
//{
//    /**
//     * @var JsonFactory
//     */
//    protected $resultJsonFactory;
//
//    /**
//     * @param Context $context
//     * @param JsonFactory $resultJsonFactory
//     */
//    public function __construct(
//        Context     $context,
//        JsonFactory $resultJsonFactory
//    )
//    {
//        parent::__construct($context);
//        $this->resultJsonFactory = $resultJsonFactory;}
//
//
//    /**
//     * View  page action
//     *
//     * @return ResultInterface
//     */
//    public function execute()
//    {
//        $result = $this->resultJsonFactory->create();
//        $data = ['message' => 'Hello world!'];
//
//        return $result->setData($data);
//    }
//}


namespace Modules\FirstModule\Controller\Hello;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class World extends Action
{
    public function execute()
    {
        /** @var $result Page */
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

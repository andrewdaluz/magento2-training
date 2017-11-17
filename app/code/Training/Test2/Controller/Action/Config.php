<?php

/**
 * Product controller.
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Training\Test2\Controller\Action;

class Config extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $testConfig = $this->_objectManager->get('Training\Test2\Model\Config\ConfigInterface');
        
        $myNodeInfo = $testConfig->getMyNodeInfo();
        
        if (is_array($myNodeInfo)) {
            foreach ($myNodeInfo as $str) {
                $this->getResponse()->appendBody($str . "<BR>");
            }
        }
    }
} 
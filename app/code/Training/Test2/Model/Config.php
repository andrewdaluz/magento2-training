<?php
namespace Training\Test2\Model;

class Config extends \Magento\Framework\Config\Data implements \Training\Test2\Model\Config\ConfigInterface
{
    public function __construct(
    	\Training\Test2\Model\Config\Reader $reader,
    	\Magento\Framework\Config\CacheInterface $cache,
    	$cacheId = 'training_test2_config'
    ) {
        parent::__construct($reader, $cache, $cacheId);
    }

    public function getMyNodeInfo()
    {
        return $this->get();
    }
} 
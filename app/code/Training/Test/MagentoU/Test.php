<?php

namespace Training\Test\MagentoU; 

class Test  {       
	public function __construct(              
		\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,              
		\Magento\Catalog\Model\ProductFactory $productFactory,              
		\Magento\Checkout\Model\Session $session,  
		\Training\Test\Api\ProductRepositoryInterface $unit1ProductRepository,
		$justAParameter = false,              
		array $data       
	) {
		exit(var_dump($data));
	}
} 
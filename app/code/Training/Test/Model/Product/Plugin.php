<?php

namespace Training\Test\Model\Product;

class Plugin 
{
	public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
	{
		return $result + 10;
	}

}
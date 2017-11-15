<?php

namespace Training\Test\Block\Html\Breadcrumbs;

class Plugin
{
	public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
	{
		/* 
		 * it changes the classes of item's <li> tags 
		 * putting '(!)' text after the class name 
		 */
		return [$crumbName . "(!)", $crumbInfo];
	}
}
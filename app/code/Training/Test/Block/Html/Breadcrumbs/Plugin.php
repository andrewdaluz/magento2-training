<?php

namespace Training\Test\Block\Html\Breadcrumbs;

class Plugin
{
	public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
	{
		return [$crumbName . "(!)", $crumbInfo];
	}
}
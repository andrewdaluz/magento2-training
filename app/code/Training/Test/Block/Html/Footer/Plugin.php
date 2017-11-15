<?php

namespace Training\Test\Block\Html\Footer;

class Plugin
{
	public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
	{
		return 'Customized copyright!';
	}
}
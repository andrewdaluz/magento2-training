<?php

namespace Training\Test\Block\Html\Footer;

class Plugin
{
	public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
	{
		/* it shows different message on footer copyright */
		return 'Customized copyright!';
	}
}
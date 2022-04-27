<?php

namespace Flutterwave\Payments\Observer;

class AfterSuccessOrderRedirect implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('flw_redirect_script');
		echo $displayText->getText();
		$displayText->setText('Execute event successfully.');

		return $this;
	}
}


?>
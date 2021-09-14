<?php

namespace Flutterwave\Payment\Controller\Payment;

use Magento\Framework\App\CsrfAwareActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Request\InvalidRequestException;

    class Webhook extends  \Magento\Framework\App\Action\Action implements CsrfAwareActionInterface
    {

        public function execute()
	    {

	    	$textDisplay = new \Magento\Framework\DataObject(array('text',
            '<script>
            window.location = "https://www.opalnet.co.ke/success";
            </script>'));

	    	$this->_eventManager->dispatch('flutterwave_payment_success_order_redirect', ['flw_redirect_script' => $textDisplay ]);
	    	echo $textDisplay->getText();
	    	exit;
	    }

        public function createCsrfValidationException(RequestInterface $request): ? InvalidRequestException
        {
            return null;
        }
            
        public function validateForCsrf(RequestInterface $request): ?bool
        {
            return true;
        }
        
    }
    













?>
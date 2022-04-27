<?php

namespace Flutterwave\Payments\Model\Payment;

class Flutterwave extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "flutterwave";
    protected $_isOffline = false;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
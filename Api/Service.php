<?php

namespace Flutterwave\Payments\Api;

use Flutterwave\Payments\Api\ServiceInterface;
use Magento\Framework\Webapi\ServiceInputProcessor;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Sales\Model\Order\Email\Sender\OrderSender;
use Magento\Framework\Registry;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;


class Service  implements ServiceInterface
{

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
        $this->scopeStore = ScopeInterface::SCOPE_STORE;
        $this->base_url = 'https://api.flutterwave.com/v3/';
        if($this->scopeConfig->getValue('payment/flutterwave/test_mode', $this->scopeStore)) {
            $this->publicKey = $this->scopeConfig->getValue('payment/flutterwave/test_public_key', $this->scopeStore);
            $this->secretKey = $this->scopeConfig->getValue('payment/flutterwave/test_secret_key', $this->scopeStore);
        }else{
            $this->secretKey = $this->scopeConfig->getValue('payment/flutterwave/live_secret_key', $this->scopeStore);
            $this->publicKey = $this->scopeConfig->getValue('payment/flutterwave/live_public_key', $this->scopeStore);
        }
    }

    public function verifyPayment():string 
    {
        $data = $this->getRequest()->getContent();
        return "verifyPayment";
    }

    public function generatePaymentLink():string
    {
        $data = $this->getRequest()->getContent();
        return "generatePaymentLink";
    }
}
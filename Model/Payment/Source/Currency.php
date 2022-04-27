<?php

namespace Flutterwave\Payments\Model\Payment\Source;

use Magento\Framework\Option\ArrayInterface;

class Currency implements ArrayInterface
{

  public function toOptionArray()
  {
    return [
      [
        'value' => 'NGN',
        'label' => 'Naira',
      ],
      [
        'value' => 'KES',
        'label' => 'Kenyan Shelings'
      ],
      [
        'value' => 'USD',
        'label' => 'US Dollars'
      ],
      [
        'value' => 'UGX',
        'label' => 'Uganda'
      ],
      [
        'value' => 'PayPal',
        'label' => 'PayPay only'
      ],
      [
        'value' => 'mpesa',
        'label' => 'Mpesa(KES) only'
      ],
      [
        'value' => 'mobilemoney',
        'label' => 'MobileMoney only'
      ],
    ];
  }
}
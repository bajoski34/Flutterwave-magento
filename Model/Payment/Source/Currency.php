<?php

namespace Flutterwave\Flutterwavepayments\Model\Payment\Source;

use Magento\Framework\Option\ArrayInterface;

class Currency implements ArrayInterface
{

  public function toOptionArray()
  {
    return [
      [
        'value' => 'both',
        'label' => 'All',
      ],
      [
        'value' => 'card',
        'label' => 'Card Only'
      ],
      [
        'value' => 'account',
        'label' => 'Account Only'
      ],
      [
        'value' => 'ussd',
        'label' => 'USSD only'
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
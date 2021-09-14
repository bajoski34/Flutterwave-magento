<?php


namespace Flutterwave\Payment\Block\Adminhtml\System\Config\Fieldset;


class Webhook extends \Magento\Config\Block\System\Config\Form\Field
{
    
    protected function _getElementHtml(AbstractElement $element)
    {
        $webhookUrl = $this->store->getBaseUrl() . 'flutterwave/payment/webhook';
        $value = "please kindly login to <a target=\"_blank\" href=\"https://dashboard.flutterwave.com\">Flutterwave Dashboard Settings</a> to update your Webhook URL to:<br><br>"
                . "<strong style='color:red;'>$webhookUrl</strong>";
        
        $element->setValue($webhookUrl);

        return $value;
    }
}










?>
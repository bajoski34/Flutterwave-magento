<?php


namespace Flutterwave\Payments\Block\Adminhtml\System\Config\Fieldset;

use Magento\Framework\Data\Form\Element\AbstractElement;

class Webhook extends \Magento\Config\Block\System\Config\Form\Field
{
    protected function _getElementHtml(AbstractElement $element):string
    {
        // show the webhook in the settings page
        $webhookUrl = $this->store->getBaseUrl() . 'flutterwave/webhook/webhook';
        $value = "please kindly login to <a target=\"_blank\" href=\"https://dashboard.flutterwave.com\">Flutterwave Dashboard Settings</a> to update your Webhook URL to:<br><br>"
                . "<strong style='color:red;'>$webhookUrl</strong>";
        
        $element->setValue($webhookUrl);

        return $value;
    }
}
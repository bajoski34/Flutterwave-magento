define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list',
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'ravepayment',
                component: 'Flutterwave_Flutterwavepayments/js/view/payment/method-renderer/flutterwavepayment-method'
            }
        );
        return Component.extend({});
    }
);
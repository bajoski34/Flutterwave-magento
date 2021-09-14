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
                type: 'flutterewave',
                component: 'Flutterwave_Payments/js/view/payment/method-renderer/flutterwave-method'
            }
        );
        return Component.extend({});
    }
);
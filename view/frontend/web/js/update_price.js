define([
    'jquery',
    'Magento_Checkout/js/model/totals',
    // 'Magento_Checkout/js/action/get-totals',
    // 'Magento_Checkout/js/action/get-payment-information',
    // 'Magento_Customer/js/customer-data'
], function ($, totals) {

    $(document).ready(function(){

        var inputs_cart = $("form#shipping-zip-form :input, form#shipping-zip-form select, form#form-validate :input");

        $(document).on('change, focusout', inputs_cart, function() {

            var grandtotal = totals.totals();
            var cc_price = grandtotal.grand_total*100;

            $('.cc-price-module-checkout_cart').attr('data-cc', cc_price);

            loadCreditClick();

        });
    });
});
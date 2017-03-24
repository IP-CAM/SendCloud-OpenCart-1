<?php

class ModelModuleSendcloud extends Model
{
    function getPickerPresets()
    {
        return array(
            ""=>array(
                "sendcloud_checkout_route" => "",
                "sendcloud_checkout_picker_selector" => "",
                "sendcloud_checkout_picker_position" => "",
                "sendcloud_checkout_selector_address" => "",
                "sendcloud_checkout_selector_address2" => "",
                "sendcloud_checkout_selector_city" => "",
                "sendcloud_checkout_selector_postcode" => "",
                "sendcloud_checkout_selector_fake_click" => ""
            ),
            "OpenCart" => array(
                "sendcloud_checkout_route" => "checkout/checkout",
                "sendcloud_checkout_picker_selector" => "#shipping-new",
                "sendcloud_checkout_picker_position" => "before",
                "sendcloud_checkout_selector_address" => "#input-shipping-address-1",
                "sendcloud_checkout_selector_address2" => "#input-shipping-address-2",
                "sendcloud_checkout_selector_city" => "#input-shipping-city",
                "sendcloud_checkout_selector_postcode" => "#input-shipping-postcode",
                "sendcloud_checkout_selector_fake_click" => "input[name=shipping_address]"
            ),
            "Journal" => array(
                "sendcloud_checkout_route" => "checkout/checkout",
                "sendcloud_checkout_picker_selector" => "#shipping-address",
                "sendcloud_checkout_picker_position" => "before",
                "sendcloud_checkout_selector_address" => "#input-shipping-address-1",
                "sendcloud_checkout_selector_address2" => "#input-shipping-address-2",
                "sendcloud_checkout_selector_city" => "#input-shipping-city",
                "sendcloud_checkout_selector_postcode" => "#input-shipping-postcode",
                "sendcloud_checkout_selector_fake_click" => "input[name=shipping_address]"
            ),
            "Ajax Quick Checkout" => array(
                "sendcloud_checkout_route" => "checkout/checkout",
                "sendcloud_checkout_picker_selector" => "#payment_address_shipping_address",
                "sendcloud_checkout_picker_position" => "before",
                "sendcloud_checkout_selector_address" => "#shipping_address_address_1",
                "sendcloud_checkout_selector_address2" => "#shipping_address_address_2",
                "sendcloud_checkout_selector_city" => "#shipping_address_city",
                "sendcloud_checkout_selector_postcode" => "#shipping_address_postcode",
                "sendcloud_checkout_selector_fake_click" => "#payment_address_shipping_address"
            ),
            "Quick Checkout"=>array(
                "sendcloud_checkout_route" => "quickcheckout/checkout",
                "sendcloud_checkout_picker_selector" => "#shipping",
                "sendcloud_checkout_picker_position" => "before",
                "sendcloud_checkout_selector_address" => "#input-shipping-address-1",
                "sendcloud_checkout_selector_address2" => "#input-shipping-address-2",
                "sendcloud_checkout_selector_city" => "#input-shipping-city",
                "sendcloud_checkout_selector_postcode" => "#input-shipping-postcode",
                "sendcloud_checkout_selector_fake_click" => "#shipping"
            )
        );
    }
}

?>
<?php
/**
 * @package Display_MinPrice_WooCommerce
 * @version 1.0
 */
/*
Plugin Name: Minimum Price WooCommerce variations
Plugin URI: http://www.chrisllv.com/
Description: This plugin display minimum price from multiple variations in Woocommerce products
Author: Chris L.
Version: 1.0
Author URI: http://www.chrisllv.com/
*/

add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
function custom_variation_price( $price, $product ) {
     $price = '';
     $price .= woocommerce_price($product->get_price());
     return $price;
}

?>

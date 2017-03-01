<?php
/*
 * Plugin Name: Woocommerce Extra Random Fees
 * Version: 1.0
 * Plugin URI: https://www.facebook.com/fachrulhasan
 * Description: This plugin will add extra fees for Woocommerce (3 random numbers).
 * Author: Fachrul Hasan
 * Author URI: https://www.facebook.com/fachrulhasan
 * Requires at least: 4.2
 * Tested up to: 4.2
 *
 *
 * @package WordPress
 * @author Fachrul Hasan
 * @since 1.0.0
 */
 
 function woo_add_cart_fee_hasan() {
 
  global $woocommerce;
  $random = rand(1, 999);
			
  $woocommerce->cart->add_fee( __('Custom', 'woocommerce'), $random );
  echo "<p style='color:red;'>Kode unik akan berubah setiap refresh, harap membayar dengan kode unik terakhir (setelah checkout)</p>";
	
}
add_action( 'woocommerce_cart_calculate_fees', 'woo_add_cart_fee_hasan' );
 
?>

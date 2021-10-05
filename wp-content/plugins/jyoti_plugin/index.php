<?php

/**
 * Plugin Name: jyoti_plugin
 * Plugin URI: https://www.yourwebsiteurl.com/
 * Description: This is the very first plugin I ever created.
 * Version: 1.0
 * Author: Your Name Here
 * Author URI: http://yourwebsiteurl.com/
 **/






// custom plugin to remove sidebar from shop and product page of woocommerce

function remove_sidebar()
{
  if (is_shop()) {
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
  }
}
add_filter('is_active_sidebar', 'remove_sidebar', 10, 2);

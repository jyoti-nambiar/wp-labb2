<?php

function enque_styles_custom()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/custom.css', false, '1.1', 'all');

    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.css', false, '1.1', 'all');

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', false, '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'enque_styles_custom');

function enque_scripts_custom()
{
    wp_register_script('jQuery', get_stylesheet_directory_uri() . '/js/jquery.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_register_script('script', get_stylesheet_directory_uri() . '/js/script.js', null, null, true);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'enque_scripts_custom');


function register_menus()
{
    register_nav_menus(array(
        'general' => 'General'
    ));
}

add_action('after_setup_theme', 'register_menus');

add_action('custom_hook', 'test');
function test()
{
    echo 'Custom hook';
}


add_theme_support('woocommerce');

// Our custom post type function
function create_posttype()
{

    register_post_type(
        'customer-review',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('customer-reviews'),
                'singular_name' => __('customer-review')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'review'),
            'show_in_rest' => true,

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

/*
* Creating a function to create our CPT
*/



add_theme_support('title-tag');


//calling custom made do_action function implemented in footer
function footerDoActionCalling()
{

    echo "<h4>@Copyright Jyoti</h4>";
}
add_action("jyotis-website", "footerDoActionCalling");



function wbcom_change_product_price_display($price)
{
    $price .= ' sale only for today';
    return $price;
}
add_filter('woocommerce_get_price_html', 'wbcom_change_product_price_display'); // Changes on shop and single product page
add_filter('woocommerce_cart_item_price', 'wbcom_change_product_price_display');// Changes on cart
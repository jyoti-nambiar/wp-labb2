<?php


//Register menus

function register_menus()
{
    register_nav_menus(array(
        'general' => 'General'
    ));
}

add_action('after_setup_theme', 'register_menus');



add_theme_support('woocommerce');

// custom post type function
function create_posttype()
{

    register_post_type(
        'review',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('reviews'),
                'singular_name' => __('review')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'review'),
            'show_in_rest' => true,
            'show_in_nav_menus' => true,

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
add_filter('woocommerce_cart_item_price', 'wbcom_change_product_price_display'); // Changes on cart

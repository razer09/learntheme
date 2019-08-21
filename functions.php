<?php

// setup 


// includes  theme
include get_template_directory() . '/include/activate.php';
include get_template_directory() . '/include/front/enqueue.php'; 
include get_template_directory() . '/include/setup.php';
include get_template_directory() . '/include/widget.php';
include get_template_directory() . '/include/filters.php';

//custimizer
include get_template_directory() . '/include/pe-customizer.php';
include get_template_directory() . '/include/theme-customize.php';
	include get_template_directory() . '/include/customizer/socials.php';
	include get_template_directory() . '/include/customizer/color-update.php';
	include get_template_directory() . '/include/customizer/text-update.php';
	include get_template_directory() . '/include/customizer/image-uploader.php';
include get_template_directory() . '/include/front/head.php'; 

//Admin option 
include get_template_directory() . '/include/admin/menu.php';
	include get_template_directory() . '/include/admin/option-page.php';

include get_template_directory() . '/include/admin/init.php';
	include get_template_directory() . '/process/save-option.php';

//Login
include get_template_directory() . '/process/create-count.php';
include get_template_directory() . '/process/login.php';

// Register Custom Navigation Walker
include get_template_directory() . '/include/class-wp-bootstrap-navwalker.php'; 

include get_template_directory() . '/process/breadcrumbs.php';

include get_template_directory() . '/include/register-plugin.php';

// Hooks theme
add_action('after_switch_theme', 'ex_activate_theme' );//activate.php
add_action( 'wp_enqueue_scripts', 'ex_enqueue' );//enqueue.php
add_action( 'after_setup_theme', 'ex_setup_theme' );//setup.php
add_action( 'widgets_init', 'ex_widjets' );//wiget.php
add_filter( 'excerpt_length', 'ex_custom_excerpt_length' );//filter.php
add_filter( 'excerpt_more', 'ex_excerpt_more' );//filter.php
add_filter( 'customize_register', 'ex_customize_register' );//theme-customize.php
add_filter( 'wp_head', 'ex_head' );//head.php
                                   
//admin                                   
add_action('admin_menu', 'ex_admin_menu');//menu.php
add_action( 'admin_init', 'ex_admin_init' );//init.php

//Login
add_action( 'wp_ajax_nopriv_ex_create_account', 'ex_create_count' );//create-count.php
add_action( 'wp_ajax_nopriv_ex_login', 'ex_login' );//login.php
add_action( 'tgmpa_register', 'ex_register_required_plugins' );//register-plugin.php


//include woocommerce
include get_template_directory() . '/include/woocommerce/befor-after-content.php';
include get_template_directory() . '/include/woocommerce/thubnail-img.php';
include get_template_directory() . '/include/woocommerce/ajax-action.php';
include get_template_directory() . '/include/woocommerce/checkout-mod.php';
include get_template_directory() . '/include/woocommerce/custom-product-search-form.php';
include get_template_directory() . '/include/woocommerce/loop-modif.php';
include get_template_directory() . '/include/shortcode/ga-author_form.php';

require_once get_template_directory() . '/include/libs/class-tgm-plugin-activation.php';

//Hook woocommerce

//befor-after-content.php
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
	add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

//thubnail-img.php
add_action( 'woocommerce_shop_loop_item_title', 'ex_thubnail_img' );

//ajax-action.php
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment',10 );
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_cart_fragment',20 );

//checkout-mod.php
add_filter( 'woocommerce_checkout_fields' , 'custom_override_address_fields' );
add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_address_fields' );

//custom-product-search-form.php and search
add_filter( 'get_product_search_form' , 'me_custom_product_searchform' );
add_action( 'woocommerce_archive_description', function(){get_product_search_form();} );

//loop-modif.php and loop
add_action( 'woocommerce_shop_loop_item_title', 'ajouter_excerpt' );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

//siebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

//checkout
add_filter( 'woocommerce_gateway_description',function( $descrip ){return ;} );
add_action( 'woocommerce_checkout_before_customer_details', function(){
	echo "<div class='col-md-6 billing-detaills'>";
} );
add_action( 'woocommerce_checkout_after_customer_details', function(){
	echo "</div>
		  <div class='col-md-6 order-detaills'>";
} );
add_action( 'woocommerce_checkout_after_order_review', function(){
	echo "</div>";
} );


//shortcode
add_shortcode( 'ex_auth_form', 'ex_auth_form_shrtcode' );


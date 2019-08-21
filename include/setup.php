<?php 

function ex_setup_theme(){

	//theme support 
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'automatic_feed_links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'post-formats',array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	
	//register menus
	register_nav_menu( 'primary', __( 'primary Menus', 'exemple') );
	register_nav_menu( 'footer_p1', __( 'Footer Menus part1', 'exemple') );
	register_nav_menu( 'footer_p2', __( 'Footer Menus part2', 'exemple') );

	load_theme_textdomain( 'exemple', get_template_directory() . '/lang' );

}
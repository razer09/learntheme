<?php 

function ex_enqueue(){

	//register style
	wp_register_style( 'ex_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style( 'ex_rtl_bootstrap', get_template_directory_uri() . '/assets/css/docs.rtl.min.css' );
	wp_register_style( 'ex_font_awsom', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_register_style( 'ex_animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_register_style( 'ex_main', get_template_directory_uri() . '/assets/css/main.css' );
	wp_register_style( 'ex_rtl_main', get_template_directory_uri() . '/assets/css/rtl-main.css' );

	//enqueue style
	wp_enqueue_style( 'ex_bootstrap' );
	wp_enqueue_style( 'ex_font_awsom' );
	wp_enqueue_style( 'ex_animate' );
	wp_enqueue_style( 'ex_main' );

	if ( is_rtl() ) {
		wp_enqueue_style( 'ex_rtl_bootstrap' );
		wp_enqueue_style( 'ex_rtl_main' );
	}


	//register script 
	wp_register_script( 'ex_poppers', get_template_directory_uri() . '/assets/js/popper.min.js', array(), false, true );
	wp_register_script( 'ex_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true );
	wp_register_script( 'ex_wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), false, true );
	wp_register_script( 'ex_nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', array(), false, true );
	wp_register_script( 'ex_main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'ex_poppers' );
	wp_enqueue_script( 'ex_bootstrap' );
	wp_enqueue_script( 'ex_wow' );
	wp_enqueue_script( 'ex_nicescroll' );
	wp_enqueue_script( 'ex_main' );

	wp_localize_script( 'ex_main', 'ex_object', array(
		'ajax_url'				=> admin_url( 'admin-ajax.php' ),
		'home_url'				=> home_url( '/' )	
	) );
}
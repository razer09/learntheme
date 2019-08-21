<?php 

function ex_admin_enqueue(){
	
	if( !isset( $_GET[ 'page' ] ) ||  $_GET[ 'page' ] !== 'ex_guidall' ){
		return;
	}
	//register style
	wp_register_style( 'ex_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style( 'ex_admin', get_template_directory_uri() . '/assets/css/main-admin.css' );
	
	//enqueue style
	wp_enqueue_style( 'ex_bootstrap' );
	wp_enqueue_style( 'ex_admin' );

	wp_register_script( 'ex_poppers', get_template_directory_uri() . '/assets/js/popper.min.js', array(), false, true );
	wp_register_script( 'ex_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true );
	wp_register_script( 'ex_option', get_template_directory_uri() . '/assets/js/option-admin.js', array(), false, true );

	wp_enqueue_media();

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'ex_poppers' );
	wp_enqueue_script( 'ex_bootstrap' );
	wp_enqueue_script( 'ex_option' );
	
}
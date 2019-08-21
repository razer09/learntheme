<?php 

function ex_admin_init(){

	include( 'enqueue.php' );
	
	add_action( 'admin_enqueue_scripts', 'ex_admin_enqueue' );
	add_action( 'admin_post_ex_save_option', 'ex_save_option' );

}
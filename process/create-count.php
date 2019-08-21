<?php 

function ex_create_count(){

	$output 	= [ 'status' => 1, 'desc' 	=> 'hellow' ];

	$nonce		= isset($_POST['_wpnonce']) ? $_POST['_wpnonce'] : '';

	if( !wp_verify_nonce( $nonce, 'ex_auth' ) ){
		$output['desc'] = 'on a pas recever wpnonce';
		wp_send_json( $output );
	}

	if( !isset( $_POST['name'], $_POST['email'], $_POST['user_name'], $_POST['password'], $_POST['confirm_password'] ) ){
		$output['desc'] = 'on a pas recever name,email ...';
		wp_send_json( $output );
	}

	$name 					= sanitize_text_field( $_POST['name'] );
	$email 					= sanitize_email( $_POST['email'] );
	$user_name 				= sanitize_text_field( $_POST['user_name'] );
	$password 				= sanitize_text_field( $_POST['password'] );
	$confirm_password 		= sanitize_text_field( $_POST['confirm_password'] );

	if( username_exists( $user_name ) || email_exists( $email ) || $password !== $confirm_password || !is_email( $email )  ){
		$output['desc'] = 'user name exist or email exist ...';
		wp_send_json( $output );
	}

	//create user 
	$user_id 		= wp_insert_user( [
		'user_login'					=> $user_name,
		'user_nicename'						=> $name,
		'user_email'					=> $email,
		'user_password'					=> $password,
	] );

	if( is_wp_error( $user_id ) ){
		$output['desc'] = 'user na pas inserer correctement';
		wp_send_json( $output );
	}

	//login new user 
	$user 		= get_user_by( 'id', $user_id );

	wp_set_current_user( $user, $user->user_login );
	wp_set_auth_cookie( $user_id, false);
	do_action( 'wp_login', $user->user_login, $user );

	$output['status'] = 2; 

	wp_send_json( $output );
}
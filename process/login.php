<?php 

function ex_login(){

	$output 	= [ 'status' => 1, 'desc' 	=> 'hellow' ];

	$nonce		= isset($_POST['_wpnonce']) ? $_POST['_wpnonce'] : '';

	if( !wp_verify_nonce( $nonce, 'ex_auth' ) ){
		$output['desc'] = 'on a pas recever wpnonce';
		wp_send_json( $output );
	}

	if( !isset( $_POST['name'], $_POST['password'] ) ){
		$output['desc'] = 'on a pas recever name,email ...';
		wp_send_json( $output );
	}

	$name 					= sanitize_text_field( $_POST['name'] );
	$password 				= sanitize_text_field( $_POST['password'] );

	$user 		= wp_signon( [
			'user_login'		=> sanitize_text_field( $_POST['name'] ),
			'user_password'		=> sanitize_text_field( $_POST['password'] ),
			'remember'			=> true	

	], false );

	if( is_wp_error( $user ) ){
		$output['desc'] = 'user na pas inserer correctement';
		wp_send_json( $output );
	}

	$output['status'] = 2; 

	wp_send_json( $output );

}
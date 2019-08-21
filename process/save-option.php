<?php 

function ex_save_option(){

	if ( !current_user_can( 'edit_theme_options' ) ){
		wp_die( __( 'You are not allowed to enter yhis page', 'exemple' ) );
	}

	//pour assurer le wnonce
	check_admin_referer( 'ex_options_verify' );
	
	//process 
	$opts               =   [
			'slider_img_1'       =>  $_POST[ 'first-slider' ],
			'slider_img_2' 		 =>  $_POST[ 'second-slider' ],
			'slider_img_3' 		 =>  $_POST[ 'third-slider' ],
		];
	update_option( 'ex_opts', $opts );

	//redirect 
	wp_redirect( admin_url( 'admin.php?page=ex_guidall&status=1' ) );
}
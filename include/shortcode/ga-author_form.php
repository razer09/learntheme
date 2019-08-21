<?php 
function ex_auth_form_shrtcode(){

	if( is_user_logged_in() ){
		return;
	}
	
	$formhtml = file_get_contents( 'ga-auth-template.php', true );

	$formhtml = str_replace(
		'NONCE_FIELD_PH',
		wp_nonce_field( 'ex_auth', '_wpnonce', true, false ),
		$formhtml
	);

	$formhtml = str_replace(
		'SHOW_REG_FORM_PH',
		!get_option( 'users_can_register' ) ? 'style="display: none;"' : '',
		$formhtml
	);

	return $formhtml;
}
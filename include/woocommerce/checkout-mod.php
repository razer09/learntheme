<?php 

// Our hooked in function - $address_fields is passed via the filter!
function custom_override_address_fields( $address_fields ) {
	$address_fields['billing']['billing_email']['required'] = false;	
	
     return $address_fields;
}

// Our hooked in function - $address_fields is passed via the filter!
function custom_override_default_address_fields( $address_fields ) {

     unset($address_fields['company']);
     unset($address_fields['city']);
     unset($address_fields['postcode']);

     return $address_fields;
}
<?php

function ex_activate_theme(){
	// 4.7 < 4.5 = false
	if( version_compare( get_bloginfo( 'version' ), '4.5', '<' ) ){
		wp_die( __( 'You must update WordPress to use this plugin', 'recipe' ) );
	}

}	

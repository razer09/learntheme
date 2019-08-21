<?php 

function ex_register_required_plugins(){

	$plugins 		= [

		[
			'name'		=> 'WooCommerce',
			'slug'		=> 'woocommerce',
			'required'	=> false,
		],
		[
			'name'		=> 'Contact Form 7',
			'slug'		=> 'contact-form-7',
			'required'	=> false,
		],
		[
			'name'		=> 'Recipe',
			'slug'		=> 'recipe',
			'src'		=> get_template_directory() . '/plugins/recipe.zip',	
			'required'	=> true,			
		]
	];

	$config					= [
		'id'				=> 'guidall',
		'menu'				=> 'tgmpa-install-plugin',
		'parent_slug'		=> 'theme.php',
		'capability'		=> 'edit_theme_options',
		'has_notices'		=> true,
		'dismissable'		=> true
	];

	tgmpa( $plugins, $config );
}
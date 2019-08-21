<?php 

function ex_customize_register( $wp_customize ){

	// Has to be at the top
	$wp_customize->register_panel_type( 'PE_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'PE_WP_Customize_Section' );

	// Add three levels on panels
	$lvl1ParentPanel = new PE_WP_Customize_Panel( $wp_customize, 'guidall_panel', array(
	    'title' => 'guidall',
	    'priority' => 90,
	));	

	$wp_customize->add_panel( $lvl1ParentPanel );

	$lvl2ParentPanel = new PE_WP_Customize_Panel( $wp_customize, 'text_panel', array(
	    'title' => 'Text Modification',
	    'panel' => 'guidall_panel',
 	 ));

  	$wp_customize->add_panel( $lvl2ParentPanel );



	//social customizer section
	ex_socials_customizer_section( $wp_customize );

	//color custimizer section 
	ex_color_customizer_section( $wp_customize );

	//image custimizer section 
	ex_image_uploader_section( $wp_customize );

	//text custimizer section 
	ex_text_customizer_section( $wp_customize );
}
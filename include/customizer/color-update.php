<?php 

function ex_color_customizer_section( $wp_customize ){

	//Create section 
	$wp_customize -> add_section( 'ex_color_section', array(
			'title'				=> __( 'color settings', 'guidall' ),
			'priority'			=> 30,
            'panel'             => 'guidall_panel',	
	) );

	//create setting
	$wp_customize -> add_setting( 'ex_principle_color', array( 
			'default' 			=> '#08526d'
	 ) );

	 $wp_customize -> add_setting( 'ex_second_color', array( 
			'default' 			=> '#ec1c23'
	 ) );

	
	//Create controlers
	$wp_customize -> add_control( 
		new WP_Customize_Color_Control(
        $wp_customize,
        'princple_color',
        array(
            'label'          => __( 'principle color', 'guidall' ),
            'section'        => 'ex_color_section',
            'settings'       => 'ex_principle_color'
        )
    ) );

    $wp_customize -> add_control( 
		new WP_Customize_Color_Control(
        $wp_customize,
        'second_color',
        array(
            'label'          => __( 'second color', 'guidall' ),
            'section'        => 'ex_color_section',
            'settings'       => 'ex_second_color'
        )
    ) );

    

}
<?php 

function ex_socials_customizer_section( $wp_customize ){

	//Create section 
	$wp_customize -> add_section( 'ex_social_section', array(
			'title'				=> __( 'social settings', 'guidall' ),
			'priority'			=> 30,
            'panel'             => 'guidall_panel',	
	) );

	//create setting
	$wp_customize -> add_setting( 'ex_facebook_handle', array( 
			'default' 			=> ''
	 ) );

	 $wp_customize -> add_setting( 'ex_youtube_handle', array( 
			'default' 			=> ''
	 ) );

	 $wp_customize -> add_setting( 'ex_twitter_handle', array( 
			'default' 			=> ''
	 ) );

	 $wp_customize -> add_setting( 'ex_gmail_handle', array( 
			'default' 			=> ''
	 ) ); 

	 $wp_customize -> add_setting( 'ex_phone_handle', array( 
			'default' 			=> ''
	 ) );

     $wp_customize -> add_setting( 'ex_adress_handle', array( 
            'default'           => 'france paris 09'
     ) );

	
	//Create controlers
	$wp_customize -> add_control( 
		new WP_Customize_Control(
        $wp_customize,
        'ex_sicial_facebook',
        array(
            'label'          => __( 'Facebook handle', 'guidall' ),
            'section'        => 'ex_social_section',
            'settings'       => 'ex_facebook_handle'
        )
    ) );

    $wp_customize -> add_control( 
		new WP_Customize_Control(
        $wp_customize,
        'ex_youtube_social',
        array(
            'label'          => __( 'Youtube handle', 'guidall' ),
            'section'        => 'ex_social_section',
            'settings'       => 'ex_youtube_handle'
        )
    ) );

    $wp_customize -> add_control( 
		new WP_Customize_Control(
        $wp_customize,
        'ex_twitter_social',
        array(
            'label'          => __( 'Twitter handle', 'guidall' ),
            'section'        => 'ex_social_section',
            'settings'       => 'ex_twitter_handle'
        )
    ) );

    $wp_customize -> add_control( 
		new WP_Customize_Control(
        $wp_customize,
        'ex_gmail_social',
        array(
            'label'          => __( 'Gmail handle', 'guidall' ),
            'section'        => 'ex_social_section',
            'settings'       => 'ex_gmail_handle'
        )
    ) );

    $wp_customize -> add_control( 
		new WP_Customize_Control(
        $wp_customize,
        'ex_phone_sicial',
        array(
            'label'          => __( 'Phone handle', 'guidall' ),
            'section'        => 'ex_social_section',
            'settings'       => 'ex_phone_handle'
        )
    ) );

    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_adress_handle',
        array(
            'label'          => __( 'Phone handle', 'guidall' ),
            'section'        => 'ex_social_section',
            'settings'       => 'ex_adress_handle'
        )
    ) );

}
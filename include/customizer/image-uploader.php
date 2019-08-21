<?php 

function ex_image_uploader_section( $wp_customize ){

	//Create section 
	$wp_customize -> add_section( 'ex_image_section', array(
			'title'				            => __( 'Image section', 'guidall' ),
			'priority'			          => 30,
            'panel'             => 'guidall_panel',	
	) );

	//create setting
	$wp_customize -> add_setting( 'ex_testimonial_image', array( 
			'default' 			=> get_template_directory_uri().'/assets/img/testimonial.jpg'
	 ) );

	 $wp_customize -> add_setting( 'ex_chood_us_image', array( 
			'default' 			=> get_template_directory_uri().'/assets/img/choose.png'
	 ) );

	
	//Create controlers
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'test_image',
           array(
               'label'      => __( 'Testimonial image:', 'theme_name' ),
               'section'    => 'ex_image_section',
               'settings'   => 'ex_testimonial_image', 
           )
       )
   );

    $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'choos_us_image',
           array(
               'label'      => __( 'choos us image:', 'theme_name' ),
               'section'    => 'ex_image_section',
               'settings'   => 'ex_chood_us_image', 
           )
       )
   );

    

}
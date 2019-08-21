<?php 

function ex_text_customizer_section( $wp_customize ){


    /**************** Navbar Text modification******************************/

	//Create section navbar
	$wp_customize -> add_section( 'ex_nav_section', array(
			'title'				=> __( 'navbar', 'guidall' ),
			'priority'			=> 20,
            'panel'             => 'text_panel',	
	) );

    //create setting
    $wp_customize -> add_setting( 'ex_nav_title_p1', array( 
            'default'           => 'guidall'
     ) );

    $wp_customize -> add_setting( 'ex_nav_title_p2', array( 
            'default'           => 'Dz'
     ) );


    //Create controlers
        $wp_customize -> add_control( 
            new WP_Customize_Control(
            $wp_customize,
            'ex_nav_title_p1',
            array(
                'label'          => __( 'title navbar :', 'guidall' ),
                'description'    => __( 'On a 2 part blue and red part', 'guidall' ),
                'section'        => 'ex_nav_section',
                'settings'       => 'ex_nav_title_p1'
            )
        ) );
        
        $wp_customize -> add_control( 
            new WP_Customize_Control(
            $wp_customize,
            'ex_nav_title_p2',
            array(
                'section'        => 'ex_nav_section',
                'settings'       => 'ex_nav_title_p2',
            )
        ) );


    
    /**************** slider Text modification******************************/

    //Create section 
    $wp_customize -> add_section( 'ex_slider_section', array(
            'title'             => __( 'slider', 'guidall' ),
            'priority'          => 20,
            'panel'             => 'text_panel',    
    ) );


	//create setting
    $wp_customize -> add_setting( 'ex_text_slider_p1', array( 
            'default'           => 'We’re an Independent <br>Design and '
     ) );

    $wp_customize -> add_setting( 'ex_text_slider_p2', array( 
            'default'           => 'Development'
     ) );

    $wp_customize -> add_setting( 'ex_text_slider_p3', array( 
            'default'           => '<br>Agency.'
     ) );
	
    //Create controlers	
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_text_slider_p1',
        array(
            'label'          => __( 'text slider :', 'guidall' ),
            'description'    => __( 'On a 3 part : <br>
                                    avant red word, the red word, after red word 
                                    <br> tu peut sauter la ligne avec &lt;br&gt; <br><br>
                                    avant red word :', 'guidall' ),
            'section'        => 'ex_slider_section',
            'settings'       => 'ex_text_slider_p1',
            'type' => 'textarea',
        )
    ) );

    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_text_slider_p2',
        array(
            'description'    => __( 'the red word : ', 'guidall' ),
            'section'        => 'ex_slider_section',
            'settings'       => 'ex_text_slider_p2',
            'type'           => 'textarea',
        )
    ) );  

    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_text_slider_p3',
        array(
            'description'    => __( 'after red word : ', 'guidall' ),
            'section'        => 'ex_slider_section',
            'settings'       => 'ex_text_slider_p3',
            'type'           => 'textarea',
        )
    ) ); 



    /**************** Features Text modification******************************/

    //Create section 
    $wp_customize -> add_section( 'ex_feature_section', array(
            'title'             => __( 'feature', 'guidall' ),
            'priority'          => 20,
            'panel'             => 'text_panel',    
    ) );

    //create setting
    $wp_customize -> add_setting( 'ex_feature_title_1', array( 
            'default'           => 'Great Idea'
     ) );

    $wp_customize -> add_setting( 'ex_feature_text_1', array( 
            'default'           => 'Lorem ipsum dolor sit amet, sectetur adipisicing elit, eiusmod tempor incididunalquis nostrud exercitation'
     ) );

    $wp_customize -> add_setting( 'ex_feature_title_2', array( 
            'default'           => 'Quick Settings'
     ) );

    $wp_customize -> add_setting( 'ex_feature_text_2', array( 
            'default'           => 'Lorem ipsum dolor sit amet, sectetur adipisicing elit, eiusmod tempor   incididunalquis nostrud exercitation'
     ) );

    $wp_customize -> add_setting( 'ex_feature_title_3', array( 
            'default'           => 'Cloud Services'
     ) );

    $wp_customize -> add_setting( 'ex_feature_text_3', array( 
            'default'           => 'Lorem ipsum dolor sit amet, sectetur adipisicing elit, eiusmod tempor incididunalquis nostrud exercitation'
     ) );

    $wp_customize -> add_setting( 'ex_feature_title_4', array( 
            'default'           => 'Cross Dev'
     ) );

    $wp_customize -> add_setting( 'ex_feature_text_4', array( 
            'default'           => 'Lorem ipsum dolor sit amet, sectetur adipisicing elit, eiusmod tempor incididunalquis nostrud exercitation'
     ) );

    //Create controlers
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_title_1',
        array(
            'label'          => __( 'Feature 1 :', 'guidall' ),
            'description'    => __( 'the title : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_title_1'
        )
    ) );
    
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_text_1',
        array(
            'description'    => __( 'the content : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_text_1',
            'type'           => 'textarea',
        )
    ) );

    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_title_2',
        array(
            'label'          => __( 'Feature 2 :', 'guidall' ),
            'description'    => __( 'the title : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_title_2'
        )
    ) );
    
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_text_2',
        array(
            'description'    => __( 'the content : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_text_2',
            'type'           => 'textarea',
        )
    ) );  
        
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_title_3',
        array(
            'label'          => __( 'Feature 3 :', 'guidall' ),
            'description'    => __( 'the title : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_title_3'
        )
    ) );
    
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_text_3',
        array(
            'description'    => __( 'the content : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_text_3',
            'type'           => 'textarea',
        )
    ) );    

    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_title_4',
        array(
            'label'          => __( 'Feature 4 :', 'guidall' ),
            'description'    => __( 'the title : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_title_4'
        )
    ) );
    
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_text_4',
        array(
            'description'    => __( 'the content : ', 'guidall' ),
            'section'        => 'ex_feature_section',
            'settings'       => 'ex_feature_text_4',
            'type'           => 'textarea',
        )
    ) );  




    /**************** Company Text modification******************************/

   //Create section 
    $wp_customize -> add_section( 'ex_company_section', array(
            'title'             => __( 'Company', 'guidall' ),
            'priority'          => 20,
            'panel'             => 'text_panel',    
    ) );

    //create setting
    $wp_customize -> add_setting( 'ex_company_title', array( 
            'default'           => 'Company Overview'
     ) );

    $wp_customize -> add_setting( 'ex_company_text', array( 
            'default'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.'
     ) );

    $wp_customize -> add_setting( 'ex_company_h4', array( 
            'default'           => 'Lets Start Today'
     ) );

    $wp_customize -> add_setting( 'ex_company_button', array( 
            'default'           => 'View More'
     ) );


    //Create controlers
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_company_title',
        array(
            'label'          => __( 'title :', 'guidall' ),
            'section'        => 'ex_company_section',
            'settings'       => 'ex_company_title'
        )
    ) );
    
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_company_text',
        array(
            'label'          => __( 'content : ', 'guidall' ),
            'section'        => 'ex_company_section',
            'settings'       => 'ex_company_text',
            'type'           => 'textarea'     
        )
    ) );

    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_company_h4',
        array(
            'label'          => __( 'After content :', 'guidall' ),
            'section'        => 'ex_company_section',
            'settings'       => 'ex_company_h4'
        )
    ) );

    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_company_button',
        array(
            'label'          => __( 'Button content :', 'guidall' ),
            'section'        => 'ex_company_section',
            'settings'       => 'ex_company_button'
        )
    ) );


    /**************** feature work modification******************************/

   //Create section 
    $wp_customize -> add_section( 'ex_feature_work_section', array(
            'title'             => __( 'Feature Work', 'guidall' ),
            'priority'          => 20,
            'panel'             => 'text_panel',    
    ) );

    //create setting
    $wp_customize -> add_setting( 'ex_feature_work_title', array( 
            'default'           => 'Featured Work'
     ) );

    $wp_customize -> add_setting( 'ex_feature_work_text', array( 
            'default'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.'
     ) );


    //Create controlers
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_work_title',
        array(
            'label'          => __( 'title :', 'guidall' ),
            'section'        => 'ex_feature_work_section',
            'settings'       => 'ex_feature_work_title'
        )
    ) );
    
    $wp_customize -> add_control( 
        new WP_Customize_Control(
        $wp_customize,
        'ex_feature_work_text',
        array(
            'label'          => __( 'content : ', 'guidall' ),
            'section'        => 'ex_feature_work_section',
            'settings'       => 'ex_feature_work_text',
            'type'           => 'textarea'     
        )
    ) );


     /**************** Latest post modification******************************/

    //Create section 
     $wp_customize -> add_section( 'ex_latest_post_section', array(
             'title'             => __( 'Latest post', 'guidall' ),
             'priority'          => 20,
             'panel'             => 'text_panel',    
     ) );

     //create setting
     $wp_customize -> add_setting( 'ex_latest_post_title', array( 
             'default'           => 'Latest Posts'
      ) );

     $wp_customize -> add_setting( 'ex_latest_post_text', array( 
             'default'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.'
      ) );


     //Create controlers
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_latest_post_title',
         array(
             'label'          => __( 'title :', 'guidall' ),
             'section'        => 'ex_latest_post_section',
             'settings'       => 'ex_latest_post_title'
         )
     ) );
     
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_latest_post_text',
         array(
             'label'          => __( 'content : ', 'guidall' ),
             'section'        => 'ex_latest_post_section',
             'settings'       => 'ex_latest_post_text',
             'type'           => 'textarea'     
         )
     ) );


    /**************** Pricing Table modification******************************/
    //Create section 
     $wp_customize -> add_section( 'ex_princing_table_section', array(
             'title'             => __( 'Pricing Table', 'guidall' ),
             'priority'          => 20,
             'panel'             => 'text_panel',    
     ) );

     //create setting
     $wp_customize -> add_setting( 'ex_princing_table_title', array( 
             'default'           => 'Pricing Table'
      ) );

     $wp_customize -> add_setting( 'ex_princing_table_text', array( 
             'default'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.'
      ) );


     //Create controlers
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_princing_table_title',
         array(
             'label'          => __( 'title :', 'guidall' ),
             'section'        => 'ex_princing_table_section',
             'settings'       => 'ex_princing_table_title'
         )
     ) );
     
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_princing_table_text',
         array(
             'label'          => __( 'content : ', 'guidall' ),
             'section'        => 'ex_princing_table_section',
             'settings'       => 'ex_princing_table_text',
             'type'           => 'textarea'     
         )
     ) );


 /**************** why choose us modification******************************/
    //Create section 
     $wp_customize -> add_section( 'ex_why_choose_us_section', array(
             'title'             => __( 'why choose us', 'guidall' ),
             'priority'          => 20,
             'panel'             => 'text_panel',    
     ) );

     //create setting
     $wp_customize -> add_setting( 'ex_why_choose_us_title', array( 
             'default'           => 'Why Choose Us'
      ) );

     $wp_customize -> add_setting( 'ex_why_choose_us_text_1', array( 
             'default'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
      ) );

     $wp_customize -> add_setting( 'ex_why_choose_us_text_2', array( 
             'default'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.'
      ) );

     $wp_customize -> add_setting( 'ex_why_choose_us_button', array( 
             'default'           => 'Read more'
      ) );



     //Create controlers
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_why_choose_us_title',
         array(
             'label'          => __( 'title :', 'guidall' ),
             'section'        => 'ex_why_choose_us_section',
             'settings'       => 'ex_why_choose_us_title'
         )
     ) );
     
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_why_choose_us_text_1',
         array(
             'label'          => __( 'content part 1 : ', 'guidall' ),
             'section'        => 'ex_why_choose_us_section',
             'settings'       => 'ex_why_choose_us_text_1',
             'type'           => 'textarea'     
         )
     ) ); 
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_why_choose_us_text_2',
         array(
             'label'          => __( 'content part 1 : ', 'guidall' ),
             'section'        => 'ex_why_choose_us_section',
             'settings'       => 'ex_why_choose_us_text_2',
             'type'           => 'textarea'     
         )
     ) ); 
  
    $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_why_choose_us_button',
         array(
             'label'          => __( 'Button :', 'guidall' ),
             'section'        => 'ex_why_choose_us_section',
             'settings'       => 'ex_why_choose_us_button'
         )
     ) );

    /**************** Contact us modification******************************/
     $wp_customize -> add_section( 'ex_contact_us_section', array(
             'title'             => __( 'Contact us', 'guidall' ),
             'priority'          => 20,
             'panel'             => 'text_panel',    
     ) );

     //create setting
     $wp_customize -> add_setting( 'ex_contact_us_text', array( 
             'default'           => 'You think we \'re cool? let\'s work together'
      ) );

     $wp_customize -> add_setting( 'ex_contact_us_button', array( 
             'default'           => 'Contct Us'
      ) );

     //Create controlers
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_contact_us_text',
         array(
             'label'          => __( 'content :', 'guidall' ),
             'section'        => 'ex_contact_us_section',
             'settings'       => 'ex_contact_us_text',
             'type'           => 'textarea' 
         )
     ) );

     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_contact_us_button',
         array(
             'label'          => __( 'title :', 'guidall' ),
             'section'        => 'ex_contact_us_section',
             'settings'       => 'ex_contact_us_button',
         )
     ) );

     /**************** Footer modification******************************/
     $wp_customize -> add_section( 'ex_footer_section', array(
             'title'             => __( 'Footer', 'guidall' ),
             'priority'          => 20,
             'panel'             => 'text_panel',    
     ) );

     //create setting
     $wp_customize -> add_setting( 'ex_footer_text', array( 
             'default'           => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse'
      ) );

     $wp_customize -> add_setting( 'ex_footer_button', array( 
             'default'           => 'Read More'
      ) );

     $wp_customize -> add_setting( 'ex_footer_link', array( 
             'default'           => 'Helpful Links'
      ) );

     $wp_customize -> add_setting( 'ex_footer_contact_us', array( 
             'default'           => 'Contact Us'
      ) );


     //Create controlers
     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_footer_text',
         array(
             'label'          => __( 'Text :', 'guidall' ),
             'section'        => 'ex_footer_section',
             'settings'       => 'ex_footer_text',
             'type'           => 'textarea' 
         )
     ) );

     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_footer_button',
         array(
             'label'          => __( 'Button :', 'guidall' ),
             'section'        => 'ex_footer_section',
             'settings'       => 'ex_footer_button',
         )
     ) );

     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_footer_link',
         array(
             'label'          => __( 'link :', 'guidall' ),
             'section'        => 'ex_footer_section',
             'settings'       => 'ex_footer_link',
         )
     ) );

     $wp_customize -> add_control( 
         new WP_Customize_Control(
         $wp_customize,
         'ex_footer_contact_us',
         array(
             'label'          => __( 'Contact_us :', 'guidall' ),
             'section'        => 'ex_footer_section',
             'settings'       => 'ex_footer_contact_us',
         )
     ) );

}
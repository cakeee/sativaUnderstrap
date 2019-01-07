<?php
    function wpus_customize_register($wp_customize) {
       // Home Page Section

       $wp_customize->add_section('homepage', array (
            'title'         => __( 'Home Page', 'understrap_child' ),
            'description'   => sprintf(__('Options for Home Page', 'understrap_child')),
            'priority'      => 130
       ));

       $wp_customize->add_setting('homepage_image', array(
            'default' => trailingslashit( get_template_directory_uri() . 'inc/img/homepage_header.jpg'),
            'type' => 'theme_mod'

       ));

       $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_image', array(
            'label' => __( 'Homepage Image', 'understrap_child' ),
            'section' => 'homepage',
            'settings' => 'homepage_image',
            'priority' => '1'
        
        )));


    }
    add_action('customize_register', 'wpus_customize_register');
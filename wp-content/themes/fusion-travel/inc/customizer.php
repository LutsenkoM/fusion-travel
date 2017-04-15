<?php

function fusion_customize_register($wp_customize) {

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

//Home page panel
    $wp_customize->add_panel ('Home page panel',
        array(
            'title' => __('Home page panel'),
            'priority' => 10,
        )
    );
    // Header
    $wp_customize->add_section ( 'header',
        array(
            'title' => __('Header'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'hot-line',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'hot-line',
            array(
                'settings'		=> 'hot-line',
                'section'		=> 'header',
                'type'			=> 'text',
                'label'	        => __( 'Hot line' )
            )
        )
    );
    // Header end
    // Intro
    $wp_customize->add_section ( 'intro',
        array(
            'title' => __('Intro'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'intro-title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'intro-title',
            array(
                'settings'		=> 'intro-title',
                'section'		=> 'intro',
                'type'			=> 'text',
                'label'	        => __( 'Intro title' )
            )
        )
    );

    $wp_customize->add_setting(
        'intro-subtitle',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'intro-subtitle',
            array(
                'settings'		=> 'intro-subtitle',
                'section'		=> 'intro',
                'type'			=> 'text',
                'label'	        => __( 'Intro subtitle' )
            )
        )
    );

    $wp_customize->add_setting(
        'bg-intro',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-intro',
            array(
                'settings'		=> 'bg-intro',
                'section'		=> 'intro',
                'label'			=> __( 'Upload intro background')
            )
        )
    );
    // Intro end

    // Welcome
    $wp_customize->add_section ( 'welcome',
        array(
            'title' => __('Welcome'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'welcome-title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'welcome-title',
            array(
                'settings'		=> 'welcome-title',
                'section'		=> 'welcome',
                'type'			=> 'text',
                'label'	        => __( 'Welcome title' )
            )
        )
    );

    $wp_customize->add_setting(
        'welcome-description',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'welcome-description',
            array(
                'settings'		=> 'welcome-description',
                'section'		=> 'welcome',
                'type'			=> 'textarea',
                'label'	        => __( 'Welcome description' )
            )
        )
    );
    // Welcome end
    // Footer
    $wp_customize->add_section ( 'footer',
        array(
            'title' => __('Footer'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'foot-menu-title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'foot-menu-title',
            array(
                'settings'		=> 'foot-menu-title',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Menu title' )
            )
        )
    );

    $wp_customize->add_setting(
        'foot-address-title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'foot-address-title',
            array(
                'settings'		=> 'foot-address-title',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Address title' )
            )
        )
    );

    $wp_customize->add_setting(
        'foot-contact-title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'foot-contact-title',
            array(
                'settings'		=> 'foot-contact-title',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Contact Us title' )
            )
        )
    );

    $wp_customize->add_setting(
        'foot-follow-title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'foot-follow-title',
            array(
                'settings'		=> 'foot-follow-title',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Follow Us title' )
            )
        )
    );

    $wp_customize->add_setting(
        'address',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'address',
            array(
                'settings'		=> 'address',
                'section'		=> 'footer',
                'type'			=> 'textarea',
                'label'	        => __( 'Address' )
            )
        )
    );

    $wp_customize->add_setting(
        'email',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'email',
            array(
                'settings'		=> 'email',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Email' )
            )
        )
    );

    $wp_customize->add_setting(
        'phone',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'phone',
            array(
                'settings'		=> 'phone',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Phone' )
            )
        )
    );

    // Social links
    $wp_customize->add_setting(
        'social_links_twitter',
        array(
            'default'			=> 'https://twitter.com',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'social_links_twitter',
        array(
            'settings'		=> 'social_links_twitter',
            'section'		=> 'footer',
            'type'			=> 'url',
            'label'	        => __( 'Twitter Url' )
        )
    );

    $wp_customize->add_setting(
        'social_links_facebook',
        array(
            'default'			=> 'https://facebook.com',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'social_links_facebook',
        array(
            'settings'		=> 'social_links_facebook',
            'section'		=> 'footer',
            'type'			=> 'url',
            'label'	        => __( 'Facebook Url' )
        )
    );

    $wp_customize->add_setting(
        'social_links_instagram',
        array(
            'default'			=> 'https://instagram.com',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'social_links_instagram',
        array(
            'settings'		=> 'social_links_instagram',
            'section'		=> 'footer',
            'type'			=> 'url',
            'label'	        => __( 'Instagram Url' )
        )
    );
    // Social links end
    $wp_customize->add_setting(
        'copyright',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'copyright',
            array(
                'settings'		=> 'copyright',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Copyright' )
            )
        )
    );
    // Footer end

}
add_action( 'customize_register', 'fusion_customize_register' );
<?php
function cleancut_customize_register( $cust ) {
    //
    // Showcase Section
    //
    $cust->add_section( 'showcase', [
        'title'       => __( 'Showcase', 'cleancut' ),
        'description' => sprintf( __( 'Options for showcase area', 'cleancut' ) ),
        'priority'    => 130,
    ] );

    // Showcase Heading setting and control
    $cust->add_setting( 'showcase_heading', [
        'default' => _x( 'CleanCut Theme', 'cleancut' ),
        'type'    => 'theme_mod'
    ] );
    $cust->add_control( 'showcase_heading', [
        'label'    => __( 'Heading', 'cleancut' ),
        'section'  => 'showcase',
        'priority' => 3
    ] );

    // Showcase Text setting and control
    $cust->add_setting( 'showcase_text', [
        'default' => _x( 'Custom WordPress Theme by You', 'cleancut' ),
        'type'    => 'theme_mod'
    ] );
    $cust->add_control( 'showcase_text', [
        'label'    => __( 'Text', 'cleancut' ),
        'section'  => 'showcase',
        'priority' => 4
    ] );

    // Showcase Image setting and control
    $cust->add_setting( 'showcase_image', [
        'default' => get_bloginfo( 'template_directory' ) . '/img/showcase.jpg',
        'type'    => 'theme_mod'
    ] );
    $cust->add_control( new WP_Customize_Image_Control( $cust, 'showcase_image', [
        'label'    => __( 'Background Image', 'cleancut' ),
        'section'  => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    ] ) );

    // Showcase Height setting and control
    $cust->add_setting( 'showcase_height', [
        'default' => _x( 700, 'cleancut' ),
        'type'    => 'theme_mod'
    ] );
    $cust->add_control( 'showcase_height', [
        'label'    => __( 'Showcase Height', 'cleancut' ),
        'section'  => 'showcase',
        'priority' => 2
    ] );

    //
    // Social Section
    //
    $cust->add_section( 'social', [
        'title'       => __( 'Social', 'cleancut' ),
        'description' => sprintf( __( 'Social media URLs', 'cleancut' ) ),
        'priority'    => 140,
    ] );

    // Facebook URL setting and control
    $cust->add_setting( 'facebook_url', [
        'default' => _x( 'https://www.facebook.com', 'cleancut' ),
        'type'    => 'theme_mod'
    ] );
    $cust->add_control( 'facebook_url', [
        'label'    => __( 'Facebook URL', 'cleancut' ),
        'section'  => 'social',
        'priority' => 1
    ] );

    // Twitter URL setting and control
    $cust->add_setting( 'twitter_url', [
        'default' => _x( 'https://www.twitter.com', 'cleancut' ),
        'type'    => 'theme_mod'
    ] );
    $cust->add_control( 'twitter_url', [
        'label'    => __( 'Twitter URL', 'cleancut' ),
        'section'  => 'social',
        'priority' => 2
    ] );

    // LinkedIn URL setting and control
    $cust->add_setting( 'linkedin_url', [
        'default' => _x( 'https://www.linkedin.com', 'cleancut' ),
        'type'    => 'theme_mod'
    ] );
    $cust->add_control( 'linkedin_url', [
        'label'    => __( 'LinkedIn URL', 'cleancut' ),
        'section'  => 'social',
        'priority' => 3
    ] );

}

add_action( 'customize_register', 'cleancut_customize_register' );

<?php
function wbp_customize_register($wp_customize)
{
    //showcase section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
        'priority' => 130
    ));

        $wp_customize->add_setting('cover_image', array(
        'default' => get_bloginfo('template_directory') . '/img/pic.png',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cover_image', array(
        'label' => __('Cover Image', 'wpbootstrap'),
        'section' => 'showcase',
        'settings' => 'cover_image',
        'priority' => 1
    )));

        $wp_customize->add_setting('cover_heading', array(
        'default' => _x('Deploy Your Analytics Across All of Your Cloud & On-Premises Environments', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('cover_heading', array(
        'label' => __('Heading', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2
    ));

        $wp_customize->add_setting('cover_text', array(
        'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('cover_text', array(
        'label' => __('Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 3
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory') . '/img/showcase.png',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'wpbootstrap'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 4
    )));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 5
    ));

    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 6
    ));

    $wp_customize->add_setting('button_url', array(
        'default' => _x('https://test.com', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('button_url', array(
        'label' => __('button Url', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 7
    ));

    $wp_customize->add_setting('button_text', array(
        'default' => _x('Read More', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('button_text', array(
        'label' => __('button Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 8
    ));
}

add_action('customize_register', 'wbp_customize_register');

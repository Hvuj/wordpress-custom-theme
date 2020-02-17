<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    //theme support
    add_theme_support('post-thumbnails');

    //post formats
    add_theme_support('post-formats', array('aside', 'gallery'));
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus(array(
    'primary' => __('Primary Menu')
));

add_action('after_setup_theme', 'register_navwalker');

//excerpt length control
function set_excerpt_length()
{
    return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');


//widget locations
function wpb_init_widgets($id)
{
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module"> ',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');

//customizer file
require get_template_directory() . '/inc/customizer.php';

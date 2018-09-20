
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function u3a_script(){
    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri(). '/css/U3A.css', array(), '1.0.0', 'all');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/U3A.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'u3a_script');

function u3a_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Secondary Footer Navigation');
}

add_action('init','u3a_theme_setup');

add_theme_support('custom-background');
$defaults = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 100,
    'height' => 100,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
);
add_theme_support('custom-header', $defaults);
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image','video'));

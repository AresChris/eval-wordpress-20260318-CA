<?php

function ca_add_thumbnails() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ca_add_thumbnails');

function ca_theme_menu_sidebar(){
    register_nav_menus([
        'main' => 'Menu principal'
    ]);
}

function tp_theme_setup() {
	register_sidebar( array(
		'id'            => 'tp-sidebar',
		'name'          => 'tp-christopher-ares',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div class="site_sidebar_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widgettitle">',
		'after_title'   => '</p>'
	) );
}

add_action('widgets_init', 'tp_theme_setup');

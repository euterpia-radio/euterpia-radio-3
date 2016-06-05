<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_register_style( 'custom-style', get_template_directory_uri() . '/style.css', array(), '20120208', 'all' );
	wp_enqueue_style( 'custom-style' );
} );

add_action( 'init', function () {
	register_nav_menu( 'header-menu', __( 'Header Menu' ) );
} );

add_action( 'after_setup_theme', function () {
	add_theme_support( 'post-thumbnails' );
} );

add_action( 'widgets_init', function () {
	register_sidebar( array(
		'name'          => 'Droite',
		'id'            => 'right-sidebar',
		'before_widget' => '<div class="a-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="a-widget-title">',
		'after_title'   => '</div>'
	) );
} );
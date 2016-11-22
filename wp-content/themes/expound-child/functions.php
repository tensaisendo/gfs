<?php

function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	/*
	$parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	
	$child_style = 'child-style';
    wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $child_style ) );

    $expound_child_style = 'expound_child_style';
    wp_enqueue_style( $expound_child_style, get_stylesheet_directory_uri() . '/css/expound.css', array( $expound_child_style ) );
	
	$expound_child_fonts_style = 'expound_child_fonts_style';
    wp_enqueue_style( $expound_child_fonts_style, get_stylesheet_directory_uri() . '/css/fonts.css', array( $expound_child_fonts_style ) );
	*/
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
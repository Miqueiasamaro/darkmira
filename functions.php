<?php

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function menus() {

	$locations = array(
		'primary'  => __( 'Menu Principal', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'menus' );


function my_enqueue_scripts()
{
    wp_register_script( 'jqueryx', get_template_directory_uri() . '/assets/js/jquery-3.5.1.slim.min.js' );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' );
    wp_register_script( 'mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js' );
    wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );

    wp_enqueue_script('jqueryx');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('mask');
    wp_enqueue_script('main');
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

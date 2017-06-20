<?php
/**
 * Created by PhpStorm.
 * User: Vol4n3
 * Date: 20/06/2017
 * Time: 13:30
 */
function init_external_files() {

	wp_enqueue_style( 'jcvolan-main-css', get_template_directory_uri() .'/css/main.css', array(), null );


	wp_enqueue_script( 'jcvolan-main-js', get_template_directory_uri() . '/js/main.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'init_external_files' );

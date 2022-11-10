<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'null', get_template_directory_uri().'./assets/style/null.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri().'./assets/fonts/stylesheet.css' );
	wp_enqueue_style( 'style', get_template_directory_uri().'./assets/style/style.css' );
	wp_enqueue_script( 'main', get_template_directory_uri() . './assets/js/main.js', array(), 'null', );
})
?>
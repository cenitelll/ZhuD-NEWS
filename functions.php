<?php

function zhudnews_assets() {
    wp_enqueue_style( 'newscss', get_template_directory_uri() . '/assets/css/news.css' );
	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'index-js', get_template_directory_uri() . '/assets/js/index.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'zhudnews_assets' );

show_admin_bar(false);

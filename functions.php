<?php

function karate_files() 

{
	wp_enqueue_style('bootstrap-styles', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Raleway:400,700,700i');
	wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('karate_main_styles', get_stylesheet_uri(), NULL, microtime());
	wp_enqueue_style('lightbox.css', get_theme_file_uri('/assets/lightbox/lightbox.css'));
	wp_enqueue_script('lightbox-plus-jquery.min', get_theme_file_uri('/assets/lightbox/lightbox-plus-jquery.min.js'), NULL, '1.0', true);
	wp_enqueue_script('main-karate-js', get_theme_file_uri('/assets/script.js'), NULL, microtime(), true);
	wp_enqueue_script('sticky-menu', get_theme_file_uri('/assets/sticky-menu.js'), NULL, '1.0', true);
	wp_enqueue_script('map', get_theme_file_uri('/assets/map.js'), NULL, '1.0', true);
	wp_enqueue_script('popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', NULL, '1.0', true);
	wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', NULL, '1.0', true);

	wp_localize_script('map', 'icons', array(
			'karateIcon' => get_template_directory_uri().'/assets/karate-icon.png',
			'markerIcon' => get_template_directory_uri().'/assets/marker-icon.png',
		)
	);

	
	wp_localize_script( 'sticky-menu', 'php_vars', array(
		'isLoggedIn' => is_user_logged_in()
		)
	);
}

add_action('wp_enqueue_scripts', 'karate_files');
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
// add_filter('the_content', 'wpse_get_content_without_images');



function karate_features() {
	add_theme_support('title-tag');
	add_action('after_setup_theme', 'karate_features');

add_theme_support( 'post-thumbnails' );


}

// Strips the_content from containing images
function get_content_without_images() {
    $content = get_the_content();
    $content = preg_replace( '/<img[^>]+./', '', $content );
    echo strip_shortcodes($content);
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
add_image_size('custom-size', 300, 200,  true);


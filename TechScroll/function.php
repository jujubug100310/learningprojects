<?php
/**
 * Theme functions and definitions
 *
 */

function htmllearning_register_menu() {
	register_nav_menu('footer-menu', __('Footer Menu'));
	register_nav_menu('sidebar-menu', __('Sidebar Menu'));
}

add_action('init','htmllearning_register_menu');

function htmllearning_widgets_init() {
	
	register_sidebar( array(
		'name' => 'My Widget Area 1',
		'id' => 'my_widget_area',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
));
	register_sidebar( array(
		'name' => 'My Widget Area 2',
		'id' => 'my_widget_area2',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
));
		register_sidebar( array(
		'name' => 'My Widget Area 3',
		'id' => 'my_widget_area3',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
));
			register_sidebar( array(
		'name' => 'My Widget Area 4',
		'id' => 'my_widget_area4',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
));
}

add_action('widgets_init','htmllearning_widgets_init');

add_filter('upload_mimes','add_custom_mime_types');

function add_custom_mime_types($mimes){
        return array_merge($mimes,array (
            'epub' => 'application/epub+zip',
            'flv' => 'video/x-flv',
            'svg' => 'image/svg+xml'));
}

add_filter( 'avatar_defaults', 'schmoesgravatar' );
 
function schmoesgravatar ($avatar_defaults) {
    $myavatar = "https://joeschmoe.io/api/v1/random";
    $avatar_defaults[$myavatar] = "Joe Schmoes Avatar";
return $avatar_defaults;
}


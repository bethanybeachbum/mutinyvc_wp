<?php 

# creation of a function
function markbrown_files() {
	wp_enqueue_script('main-site-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
	wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('markbrown_styles', get_stylesheet_uri(), NULL, microtime());
}

# function call of built in wordpress function called add_action
# first argument: when to call
# second argument: what to call
# careful - parentheses calls function immediately
add_action('wp_enqueue_scripts', 'markbrown_files');

function website_features() {
	# first arg is software name , 2nd arg is human readable
	register_nav_menu('headerMenuLocation', 'Header Menu Location');
	register_nav_menu('footerLocationOne', 'Footer Location One ');
	register_nav_menu('footerLocationTwo', 'Footer Location Two');
	add_theme_support('title-tag');
}

# website_features is a name I get to make up
add_action('after_setup_theme', 'website_features');
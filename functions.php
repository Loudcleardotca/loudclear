<?php
// Set content width for the theme 
if ( ! isset( $content_width ) )
$content_width = 1000;
// Theme setup 
add_action( 'after_setup_theme', 'portfoliotheme_themesetup' );
function portfoliotheme_themesetup() {
    // Automatic feed links 
	add_theme_support( 'automatic-feed-links' );
    // Add nav menus function to "init" hook 
	add_action( 'init', 'portfoliotheme_register_menus' );
    // Add sidebars function to "widgets_init" hook 
	add_action( 'widgets_init', 'portfoliotheme_register_sidebars' );
    // Queue JavaScript files on "wp_enqueue_scripts" hook 
	add_action( 'wp_enqueue_scripts', 'portfoliotheme_load_scripts' );
}
// Register menus 
function portfoliotheme_register_menus () {
	register_nav_menus(
	array(
	'top-navigation' => 'Top Navigation',
	'bottom-navigation' =>'Bottom Navigation'
	)
	);
}
// Register widget areas 
function portfoliotheme_register_sidebars() {
    // Right column widget area 
	register_sidebar( array(
	'name' => 'Right column',
	'id' => 'right-column',
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',     ) );
}
// Queue JavaScripts 
function portfoliotheme_load_scripts() {
	// Queue JavaScript for threaded comments if enabled 
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
	wp_enqueue_script( 'comments-reply' );
}

// Add support for post thumbnails
add_theme_support( 'post-thumbnails' );

// Add image sizes
add_image_size( 'works-small', 150, 0 );

add_filter( 'post_updated_messages', 'post_published' );

function post_published( $messages )
{
    unset($messages[post][6]);
    return $messages;
}

add_filter( 'post_updated_messages', 'post_updated' );

function post_updated( $messages )
{
    unset($messages[post][1]);
    return $messages;
}
if( function_exists('acf_add_options_page') ) {
	
	$page = acf_add_options_page(array(
		'page_title' 	=> 'Home Settings',
		'menu_title' 	=> 'Loud+Clear',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage About Us',
		'menu_title'	=> 'About us',
		'parent_slug'	=> 'theme-general-settings',
	));
 
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage People Area',
		'menu_title'	=> 'People',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage Services Area',
		'menu_title'	=> 'Services',
		'parent_slug'	=> 'theme-general-settings',
	));
	

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage Contact',
		'menu_title'	=> 'Contact',
		'parent_slug'	=> 'theme-general-settings',
	));	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage Team',
		'menu_title'	=> 'Team Page',
		'parent_slug'	=> 'theme-general-settings',
	));	
	
}

add_action('init', 'cptui_register_my_cpt_works');
function cptui_register_my_cpt_works() {
register_post_type('works', array(
'label' => 'Works',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'works', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Works',
  'singular_name' => 'Work',
  'menu_name' => 'Works',
  'add_new' => 'Add Work',
  'add_new_item' => 'Add New Work',
  'edit' => 'Edit',
  'edit_item' => 'Edit Work',
  'new_item' => 'New Work',
  'view' => 'View Work',
  'view_item' => 'View Work',
  'search_items' => 'Search Works',
  'not_found' => 'No Works Found',
  'not_found_in_trash' => 'No Works Found in Trash',
  'parent' => 'Parent Work',
)
) ); }

add_action('init', 'cptui_register_my_cpt_team');
function cptui_register_my_cpt_team() {
register_post_type('team', array(
'label' => 'Team',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'team', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Team',
  'singular_name' => 'Team',
  'menu_name' => 'Team',
  'add_new' => 'Add Team Member',
  'add_new_item' => 'Add New Team Member',
  'edit' => 'Edit',
  'edit_item' => 'Edit Team Member',
  'new_item' => 'New Team Member',
  'view' => 'View Team Member',
  'view_item' => 'View Team Member',
  'search_items' => 'Search Team Member',
  'not_found' => 'No Team Member Found',
  'not_found_in_trash' => 'No Team Member  Found in Trash',
  'parent' => 'Parent Team Member',
)
) ); }

?>
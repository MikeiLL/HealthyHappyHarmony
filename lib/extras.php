<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


//* BOF FAQ POST TYPE
// Our custom post type function
function create_faq_posttype() {

	register_post_type( 'FAQ',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'FAQs' ),
				'singular_name' => __( 'FAQ' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'FAQ'),
			'menu_icon'   => 'dashicons-book',
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init',  __NAMESPACE__ . '\\create_faq_posttype' );

/*
* Create FAQ Post Type
*/

function faq_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'FAQ', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'FAQ', 'sage' ),
		'parent_item_colon'   => __( 'Parent FAQ', 'sage' ),
		'all_items'           => __( 'All FAQs', 'sage' ),
		'view_item'           => __( 'View FAQ', 'sage' ),
		'add_new_item'        => __( 'Add New FAQ', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit FAQ', 'sage' ),
		'update_item'         => __( 'Update FAQ', 'sage' ),
		'search_items'        => __( 'Search FAQ', 'sage' ),
		'not_found'           => __( 'Not Found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'FAQ', 'sage' ),
		'description'         => __( 'New FAQs to showcase', 'sage' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'FAQ', $args );

}

//* BOF Resource POST TYPE
// Our custom post type function
function create_resources_posttype() {

	register_post_type( 'Resource',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Resources' ),
				'singular_name' => __( 'Resource' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'Resource'),
			'menu_icon'   => 'dashicons-book',
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init',  __NAMESPACE__ . '\\create_faq_posttype' );
add_action( 'init',  __NAMESPACE__ . '\\create_resources_posttype' );

/*
* Create Resource Post Type
*/

function resources_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Resource', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Resource', 'sage' ),
		'parent_item_colon'   => __( 'Parent Resource', 'sage' ),
		'all_items'           => __( 'All Resources', 'sage' ),
		'view_item'           => __( 'View Resource', 'sage' ),
		'add_new_item'        => __( 'Add New Resource', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit Resource', 'sage' ),
		'update_item'         => __( 'Update Resource', 'sage' ),
		'search_items'        => __( 'Search Resource', 'sage' ),
		'not_found'           => __( 'Not Found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Resource', 'sage' ),
		'description'         => __( 'New Resources to showcase', 'sage' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'Resource', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init',  __NAMESPACE__ . '\\faq_post_type', 0 );
add_action( 'init',  __NAMESPACE__ . '\\resources_post_type', 0 );

add_action( 'pre_get_posts', __NAMESPACE__ . '\\add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'FAQ', 'Resource' ) );
	return $query;
}
//*EOF CUSTOM POST TYPE

//*FOOTER MENU
function register_hhharmony_menu() {
 register_nav_menus(
	array(
	'footer-menu' => __( 'Footer Menu' )	
	)
	); 
}

add_action( 'init', __NAMESPACE__ . '\register_hhharmony_menu' ); 
//*

/* As recommended in Roots Discourse, this function is called
 * within div wrap so we can eliminate the container and have
 * full width rows and divs.
*/
function container_class() {
  if (is_home() || is_front_page() || 'movies' == get_post_type()) {
    return 'container-fluid';
  } else {
    return 'container';
  }
}
//*

// Start BNS Dynamic Copyright
if ( ! function_exists( 'bns_dynamic_copyright' ) ) {
  function bns_dynamic_copyright( $args = '' ) {
      $initialize_values = array( 'start' => '', 'copy_years' => '', 'url' => '', 'end' => '' );
      $args = wp_parse_args( $args, $initialize_values );
 
      /* Initialize the output variable to empty */
      $output = '';
 
      /* Start common copyright notice */
      empty( $args['start'] ) ? $output .= sprintf( __('Copyright') ) : $output .= $args['start'];
 
      /* Calculate Copyright Years; and, prefix with Copyright Symbol */
      if ( empty( $args['copy_years'] ) ) {
        /* Get all posts */
        $all_posts = get_posts( 'post_status=publish&order=ASC' );
        /* Get first post */
        $first_post = $all_posts[0];
        /* Get date of first post */
        $first_date = $first_post->post_date_gmt;
 
        /* First post year versus current year */
        $first_year = substr( $first_date, 0, 4 );
        if ( $first_year == '' ) {
          $first_year = date( 'Y' );
        }
 
      /* Add to output string */
        if ( $first_year == date( 'Y' ) ) {
        /* Only use current year if no posts in previous years */
          $output .= ' &copy; ' . date( 'Y' );
        } else {
          $output .= ' &copy; ' . $first_year . "-" . date( 'Y' );
        }
      } else {
        $output .= ' &copy; ' . $args['copy_years'];
      }
 
      /* Create URL to link back to home of website */
      empty( $args['url'] ) ? $output .= ' <a href="' . home_url( '/' ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name', 'display' ) .'</a>  ' : $output .= ' ' . $args['url'];
 
      /* End common copyright notice */
      empty( $args['end'] ) ? $output .= ' ' . sprintf( __('All rights reserved.') ) : $output .= ' ' . $args['end'];
 
      /* Construct and sprintf the copyright notice */
      $output = sprintf( __('<span id="bns-dynamic-copyright"> %1$s </span><!-- #bns-dynamic-copyright -->'), $output );
      $output = apply_filters( 'bns_dynamic_copyright', $output, $args );
 
      echo $output;
  }
}
// End BNS Dynamic Copyright
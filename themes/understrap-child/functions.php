<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'understrap-styles' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/theme.css' );

}

require get_template_directory() .  '/inc/customizer.php';

add_action( 'widgets_init', 'understrap_child_widgets_init' );

if ( ! function_exists( 'understrap_child_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function understrap_child_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Left Custom Footer', 'understrap' ),
				'id'            => 'left-custom',
				'description'   => __( 'Left Custom widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Center Custom Footer', 'understrap' ),
				'id'            => 'center-custom',
				'description'   => __( 'Center Custom widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Right Custom Footer', 'understrap' ),
				'id'            => 'right-custom',
				'description'   => __( 'Right Custom widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}

// 
/* 
{"update":{"name":"update","label":"Updates","singular_label":"Update","description":"","public":"true","publicly_queryable":"true","show_ui":"true","show_in_nav_menus":"true","show_in_rest":"true","rest_base":"update","rest_controller_class":"","has_archive":"false","has_archive_string":"","exclude_from_search":"false","capability_type":"post","hierarchical":"false","rewrite":"true","rewrite_slug":"","rewrite_withfront":"true","query_var":"true","query_var_slug":"","menu_position":"","show_in_menu":"true","show_in_menu_string":"","menu_icon":"dashicons-rss","supports":["title","editor"],"taxonomies":["category"],"labels":{"menu_name":"","all_items":"","add_new":"","add_new_item":"","edit_item":"","new_item":"","view_item":"","view_items":"","search_items":"","not_found":"","not_found_in_trash":"","parent_item_colon":"","featured_image":"","set_featured_image":"","remove_featured_image":"","use_featured_image":"","archives":"","insert_into_item":"","uploaded_to_this_item":"","filter_items_list":"","items_list_navigation":"","items_list":"","attributes":"","name_admin_bar":""},"custom_supports":""}}
*/
// 

/*
function cptui_register_my_cpts() {

	**
	 * Post Type: Updates.
	**

	$labels = array(
		"name" => __( "Updates", "custom-post-type-ui" ),
		"singular_name" => __( "Update", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Updates", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "update",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "update", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-rss",
		"supports" => array( "title", "editor" ),
		"taxonomies" => array( "category" ),
	);

	register_post_type( "update", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

*/
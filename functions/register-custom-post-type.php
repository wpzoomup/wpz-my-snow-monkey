<?php
/**
 * register_post_type
 *
 * @package wpz-my-snow-monkey
 */

function wpz_register_cpts() {

	/**
	 * Post Type: お品書き.
	 */

	$labels = [
		"name"          => esc_html__( "お品書き", "wpz-my-snow-monkey" ),
		"singular_name" => esc_html__( "お品書き", "wpz-my-snow-monkey" ),
	];

	$args = [
		"label"                 => esc_html__( "お品書き", "wpz-my-snow-monkey" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace"        => "wp/v2",
		"has_archive"           => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"can_export"            => true,
		"rewrite"               => [ "slug" => "menu-list", "with_front" => true ],
		"query_var"             => true,
		"menu_icon"             => "dashicons-list-view",
		"supports"              => [ "title", "editor", "thumbnail", "revisions", "author" ],
		"show_in_graphql"       => false,
	];

	register_post_type( "menu", $args );

	/**
	 * Post Type: お知らせ.
	 */

	$labels = [
		"name"          => esc_html__( "お知らせ", "wpz-my-snow-monkey" ),
		"singular_name" => esc_html__( "お知らせ", "wpz-my-snow-monkey" ),
	];

	$args = [
		"label"                 => esc_html__( "お知らせ", "wpz-my-snow-monkey" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace"        => "wp/v2",
		"has_archive"           => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"can_export"            => true,
		"rewrite"               => [ "slug" => "news", "with_front" => true ],
		"query_var"             => true,
		"menu_icon"             => "dashicons-megaphone",
		"supports"             => [ "title", "editor", "thumbnail" ],
		"show_in_graphql"      => false,
	];

	register_post_type( "news", $args );

	/**
	 * Post Type: WP ZoomUP に関わっている人々.
	 */

	$labels = [
		"name"          => esc_html__( "WP ZoomUP に関わっている人々", "wpz-my-snow-monkey" ),
		"singular_name" => esc_html__( "WP ZoomUP に関わっている人", "wpz-my-snow-monkey" ),
	];

	$args = [
		"label"                 => esc_html__( "WP ZoomUP に関わっている人々", "wpz-my-snow-monkey" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace"        => "wp/v2",
		"has_archive"           => true,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"can_export"            => true,
		"rewrite"               => [ "slug" => "person", "with_front" => true ],
		"query_var"             => true,
		"menu_icon"             => "dashicons-universal-access-alt",
		"supports"              => [ "title", "editor", "thumbnail" ],
		"show_in_graphql"       => false,
	];

	register_post_type( "person", $args );

	/**
	 * Post Type: スポンサー.
	 */

	$labels = [
		"name"          => esc_html__( "スポンサー", "wpz-my-snow-monkey" ),
		"singular_name" => esc_html__( "スポンサー", "wpz-my-snow-monkey" ),
	];

	$args = [
		"label"                 => esc_html__( "スポンサー", "wpz-my-snow-monkey" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace"        => "wp/v2",
		"has_archive"           => false,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => true,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"can_export"            => true,
		"rewrite"               => [ "slug" => "sponsor", "with_front" => true ],
		"query_var"             => true,
		"menu_icon"             => "dashicons-heart",
		"supports"              => [ "title", "editor", "thumbnail" ],
		"show_in_graphql"       => false,
	];

	register_post_type( "sponsor", $args );
}

add_action( 'init', 'wpz_register_cpts' );

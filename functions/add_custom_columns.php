<?php
/**
 * add_custom_columns
 *
 * @package wpz-my-snow-monkey
 */

/**
 * 管理画面に固定ページのスラッグを表示
 */
function add_page_columns_name( $columns ) {
	$columns['slug'] = "スラッグ";
	return $columns;
}
add_filter( 'manage_pages_columns', 'add_page_columns_name' );

function add_page_column( $column_name, $post_id ) {
	if ( $column_name == 'slug' ) {
		$post = get_post( $post_id );
		$slug = $post->post_name;
		echo esc_attr( $slug );
	}
}
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2 );

/**
 * 固定ページ一覧にIDを表示
 */
add_filter( 'manage_pages_columns', 'posts_columns_id', 5 );
function posts_columns_id( $defaults ) {
	$defaults['wps_post_id'] = __( 'ID' );
	return $defaults;
}
add_action( 'manage_pages_custom_column', 'posts_custom_id_columns', 5, 2 );
function posts_custom_id_columns( $column_name, $id ) {
	if ( $column_name === 'wps_post_id' ) {
		echo $id;
	}
}

/**
 * 管理画面に投稿ページのスラッグを表示
 */
function add_posts_columns_name( $columns ) {
	$columns['slug'] = "スラッグ";
	return $columns;
}
add_filter( 'manage_posts_columns', 'add_posts_columns_name' );

function add_posts_column ( $column_name, $post_id ) {
	if( $column_name == 'slug' ) {
		$post = get_post( $post_id );
		$slug = $post->post_name;
		echo esc_attr( $slug );
	}
}
add_action( 'manage_posts_custom_column', 'add_posts_column', 10, 2 );

/**
 * 投稿記事一覧にアイキャッチ画像を表示
 */

//カラムの挿入
function add_thumbnail_columns_name ( $columns ) {
	global $post_type;
	if( in_array( $post_type, array( 'post', 'menu' ) ) ) {
		$columns['thumbnail'] = __( '画像' );
	}
	return $columns;
}
add_filter( 'manage_posts_columns', 'add_thumbnail_columns_name' );

//サムネイルの挿入
function add_thumbnail_columns ( $column_name, $post_id ) {
	if ( 'thumbnail' == $column_name ) {
		$thum = get_the_post_thumbnail( $post_id, 'thumbnail', array( 'style'=>'width:75px;height:auto;' ) );
	}
	if ( isset( $thum ) && $thum ) {
		echo $thum;
	}
}
add_action( 'manage_posts_custom_column', 'add_thumbnail_columns', 10, 2 );

//カテゴリ・タグ・スラッグ、アイキャッチ画像の列の幅をCSSで調整
//投稿一覧のカラムの幅のスタイル調整
function customize_admin_css_list() {
	echo '<style TYPE="text/css">th#categories,th#tags,th#slug {width: 10%;}.column-thumbnail{width:80px;}</style>';
}
add_action( 'admin_print_styles', 'customize_admin_css_list', 21 );

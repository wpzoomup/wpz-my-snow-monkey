<?php
/**
 * custom_admin_menu
 *
 * @package wpz-my-snow-monkey
 */

/**
* ダッシュボードメニュー名とアイコンの変更
*/
add_filter(
	'register_post_type_args',
	function ( $args, $post_type ) {
		if ( 'post' === $post_type ) {
			// $args['label']          = 'ブログ';
			// $args['labels']['name'] = 'ブログ';
			$args['menu_icon']      = 'dashicons-edit-large';
			return $args;
		}
		return $args;
	},
	10,
	2
);

/**
* custom_menu_order
*/
add_filter( 'custom_menu_order', '__return_true' );
add_filter(
	'menu_order',
	function () {
		$menu_order =
		[
			'index.php',
			'separator1',
			'edit.php',
			'edit.php?post_type=news',
			'edit.php?post_type=menu',
			'edit.php?post_type=gallary',
			'edit.php?post_type=sponsor',
			'edit.php?post_type=person',
			'edit.php?post_type=page',
		];
		return $menu_order;
	}
);
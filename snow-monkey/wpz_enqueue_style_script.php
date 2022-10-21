<?php
add_action(
	'wp_enqueue_scripts', 
	function () {
		wp_enqueue_style(
			'wpz_style',
			MY_SNOW_MONKEY_URL . '/src/css/style.css',
			[],
			filemtime( MY_SNOW_MONKEY_PATH . '/src/css/style.css' )
		);
		/*
		wp_enqueue_script(
			'wpz_scripts',
			MY_SNOW_MONKEY_PATH . '/src/js/wpz_scripts.js',
			[ 'jquery' ],
			filemtime( MY_SNOW_MONKEY_PATH . '/src/js/wpz_scripts.js' ),
			true
		);
		*/
	}
);

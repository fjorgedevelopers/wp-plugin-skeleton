<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class HooksManager {
	public function __construct() {
		add_action( 'init', array( &$this, 'init_hooks' ) );
	}

	public function init_hooks() {
	}

	public function quash_unused() {
	}

	public static function debug_action( $var ) {
		debug_to_browser_console( $var );
		echo '<pre class="debug">' . print_r( $var ) . '</pre>';
	}

	public static function debug_filter( $var ) {
		debug_to_browser_console( $var );

		return $var;
	}
}

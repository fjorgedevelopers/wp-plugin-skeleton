<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class HooksManager {
	public function __construct() {
		add_action( 'init', array( &$this, 'init_hooks' ) );
	}

	public function init_hooks() {
		// add any hooks here, actions, filters. Anything but cron hooks get added here.
	}

	public function quash_unused() {
		// this is for anyone using an IDE. It can be useful for that, but don't put any code in here.
	}

	public static function debug_action( $var ) {
		debug_to_browser_console( $var );
	}

	public static function debug_filter( $var ) {
		debug_to_browser_console( $var );
		return $var;
	}
}

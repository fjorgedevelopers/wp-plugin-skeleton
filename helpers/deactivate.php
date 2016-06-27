<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Deactivate {
	public static function deactivate() {
		delete_option( LAST_EXPORTED );
	}
}

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Activate {
	public static function activate() {
		// A random date in the past.
		// 09 May 1972 08:31:53 UTC if you're interested.
		add_option( LAST_EXPORTED, 74248313 );
	}
}

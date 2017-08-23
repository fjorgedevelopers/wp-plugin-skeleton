<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Deactivate {
	public static function do_deactivate() {
		// run delete option on any options that should be removed on deactivation, but do not delete wp_option or delete any databases
	}
}

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function debug_to_browser_console( $data ) {
	$jso    = json_encode( $data );
	$js_log = "console.log($jso);";
	$output = '<script type="text/javascript" data-debug="true">' . $js_log . '</script>';
	echo $output;
}

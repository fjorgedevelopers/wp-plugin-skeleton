<?php
/**
 * @since             1.0
 * @package           
 * @author            fjorge developers <developers@fjorgedigital.com>
 *
 * Plugin Name:       plugin_name
 * Description:       
 * Version:           1.0
 * Author:            fjorge developers <developers@fjorgedigital.com>
 * License:           Proprietary
 */

// If wordpress isn't the one calling this
if ( ! defined( 'WPINC' ) ) {
	die(); // end.
}

function createHooksHandler() {
	global $viewBag;
	$viewBag = array();
	$hooks   = new HooksManager();
	$hooks->quash_unused();
	// add any cron hooks here
}

define( 'PLUGIN_NAME_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_NAME_URL', plugin_dir_url( __FILE__ ) );

// Models and Interfaces
//End Models and Interfaces

// Helpers
require_once( 'helpers/debug.php' );
require_once( 'views/view-helper.php' );
// End Helpers


// Managers
require_once( 'managers/hooks-manager.php' );
// End Managers

// Activation and deactivation hooks need to be in this file.
// (De)Activation Hooks
require_once( 'helpers/activate.php' );
register_activation_hook( __FILE__, array( 'plugin_name\Activate', 'do_activate' ) );
require_once( 'helpers/deactivate.php' );
register_deactivation_hook( __FILE__, array( 'plugin_name\Deactivate', 'do_deactivate' ) );
// End Hooks

/**
 * @property
 */
global $viewBag;
createHooksHandler();


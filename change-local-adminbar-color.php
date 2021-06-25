<?php
/**
 * Plugin name: Change local adminbar color
 * Plugin URI: https://github.com/rocket-martue/Change-local-adminbar-color
 * Description: Change the color of the local admin bar.
 * Version: 1.0.0
 * Author: Rocket Martue
 * Created: Jun. 26, 2021
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

$type = wp_get_environment_type();
if ( $type == 'local' ) {
	function local_adminbar() {
		echo '<style type="text/css">#wpadminbar { background: #738e96; }</style>';
	}
	add_action( 'admin_head', 'local_adminbar' );
	add_action( 'wp_head', 'local_adminbar' );
}
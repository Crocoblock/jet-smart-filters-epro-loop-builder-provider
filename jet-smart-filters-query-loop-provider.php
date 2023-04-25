<?php
/**
 * Plugin Name: JetSmartFilters - Elementor Pro Loop Grid provider
 * Plugin URI:  #
 * Description: Beta version of Elementor Pro Loop Grid provider for JetSmartFilters
 * Version:     1.0.0-beta2
 * Author:      Crocoblock
 * Author URI:  https://crocoblock.com/
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die();
}

define( 'JSF_EPRO_LOOP_GRID_PROVIDER_PATH', plugin_dir_path( __FILE__ ) );
define( 'JSF_EPRO_LOOP_GRID_PROVIDER_ID', 'epro-loop-builder' );

/**
 * Register custom provider
 */
add_action( 'jet-smart-filters/providers/register', function( $providers_manager ) {

	if ( false === $providers_manager->get_providers( JSF_EPRO_LOOP_GRID_PROVIDER_ID ) ) {

		$providers_manager->register_provider(
			'JSF_EPro_Loop_Grid_Provider', // Custom provider class name
			JSF_EPRO_LOOP_GRID_PROVIDER_PATH . 'provider.php' // Path to file where this class defined
		);

	}

} );

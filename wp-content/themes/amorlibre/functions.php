<?php 

/**
 *
 * @package wordpress
 */

/**
 * Assign the AmorLibre version to a var
 */
$theme              = wp_get_theme( 'amorlibre' );
$amorlibre_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$amorlibre = (object) array(
	'version' => $amorlibre_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-amorlibre.php',
	'customizer' => require 'inc/customizer/class-amorlibre-customizer.php',
);

require 'inc/amorlibre-functions.php';
require 'inc/amorlibre-template-hooks.php';
require 'inc/amorlibre-template-functions.php';

if ( class_exists( 'Jetpack' ) ) { // This is a conditional-tag read more here: https://developer.wordpress.org/themes/basics/conditional-tags/
	$storefront->jetpack = require 'inc/jetpack/class-amorlibre-jetpack.php';
}

if ( amorlibre_is_woocommerce_activated() ) {
	$amorlibre->woocommerce = require 'inc/woocommerce/class-amorlibre-woocommerce.php';

	require 'inc/woocommerce/amorlibre-woocommerce-template-hooks.php';
	require 'inc/woocommerce/amorlibre-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$amorlibre->admin = require 'inc/admin/class-amorlibre-admin.php';

	require 'inc/admin/class-amorlibre-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */


?>
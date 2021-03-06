<?php
/**
 *
 * @package Wordpress
 * @subpackage amorlibre
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

wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

add_editor_style( 'css/custom-editor-style.css' ); /** Nothing happens yet. And it is documented that there is no need for this snippet */

add_filter( 'storm_social_icons_networks', 'storm_social_icons_networks');
function storm_social_icons_networks( $networks ) {

    $extra_icons = array (
        '/feed' => array(                  // Enable this icon for any URL containing this text
            'name' => 'RSS',               // Default menu item label
            'class' => 'rss',              // Custom class
            'icon' => 'icon-rss',          // FontAwesome class
            'icon-sign' => 'icon-rss-sign' // May not be available. Check FontAwesome.
        ),
    );

    $extra_icons = array_merge( $networks, $extra_icons );
    return $extra_icons;

}
/**
 * This functions is to show a navigation menu at the header.
 * So far, the home page still shows the page example content.
 * I found and enabled the options which appeared in appearance/menu -> Header menu.
 * All the content disappeared again. I will add the second snippet.
 */
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * This should deploy two menus, header menu and extra menu.
 * Nothing, empty of content.
 * Now, it shows to menus in the appearance/menu editor. Both menus are selected.
 */

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

?>

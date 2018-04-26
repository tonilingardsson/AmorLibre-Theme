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


?>
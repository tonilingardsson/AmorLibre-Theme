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

function display_single_product_images_after_summary() {
    global $products;
    $product_id = $product->id;
    $product_image = get_the_term_list($product_id, 'product_images');
    echo '<img class="single-product-image">' . __( "Images: ", "amorlibre_slug" ) . $product_images . '</img>';
};
add_action( 'woocommerce_single_product_summary', 'display_single_product_images_after_summary', 100, 0);

/**
 * Checks if the current page is a product archive
 * @return boolean
 */
function amorlibre_is_product_archive() {
    if ( amorlibre_is_woocommerce_activated() ) {
        if ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
/**
 * Call a shortcode function by tag name.
 *
 * @since  1.4.6
 *
 * @param string $tag     The shortcode whose function to call.
 * @param array  $atts    The attributes to pass to the shortcode function. Optional.
 * @param array  $content The shortcode's content. Default is null (none).
 *
 * @return string|bool False on failure, the result of the shortcode on success.
 */
function amorlibre_do_shortcode( $tag, array $atts = array(), $content = null ) {
    global $shortcode_tags;

    if ( ! isset( $shortcode_tags[ $tag ] ) ) {
        return false;
    }

    return call_user_func( $shortcode_tags[ $tag ], $atts, $content, $tag );
}

?>

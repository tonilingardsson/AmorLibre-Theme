<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-26
 * Time: 14:48
 * @package Wordpress
 * @subpackage amorlibre
 */
function amorlibre_include_svg_icons() {
    // Define SVG sprite file.
    $svg_icons = get_parent_theme_file_path( '/assets/images/svg-icons.svg' );

    // If it exists, include it.
    if ( file_exists( $svg_icons ) ) {
        require_once( $svg_icons );
    }
}
add_action( 'wp_footer', 'amorlibre_include_svg_icons', 9999 );

/**
 * Return SVG markup.
 *
 * @param array $args {
 *     Parameters needed to display an SVG.
 *
 *     @type string $icon  Required SVG icon filename.
 *     @type string $title Optional SVG title.
 *     @type string $desc  Optional SVG description.
 * }
 * @return string SVG markup.
 */
function amorlibre_get_svg( $args = array() ) {
    // Make sure $args are an array.
    if ( empty( $args ) ) {
        return __( 'Please define default parameters in the form of an array.', 'amorlibre' );
    }

    // Define an icon.
    if ( false === array_key_exists( 'icon', $args ) ) {
        return __( 'Please define an SVG icon filename.', 'amorlibre' );
    }

    // Set defaults.
    $defaults = array(
        'icon'        => '',
        'title'       => '',
        'desc'        => '',
        'fallback'    => false,
    );

    // Parse args.
    $args = wp_parse_args( $args, $defaults );

    // Set aria hidden.
    $aria_hidden = ' aria-hidden="true"';

    // Set ARIA.
    $aria_labelledby = '';

    /*
     * Amorlibre doesn't use the SVG title or description attributes; non-decorative icons are described with .screen-reader-text.
     *
     * However, child themes can use the title and description to add information to non-decorative SVG icons to improve accessibility.
     *
     * Example 1 with title: <?php echo amorlibre_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ) ) ); ?>
     *
     * Example 2 with title and description: <?php echo amorlibre_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ), 'desc' => __( 'This is the description', 'textdomain' ) ) ); ?>
     *
     * See https://www.paciellogroup.com/blog/2013/12/using-aria-enhance-svg-accessibility/.
     */
    if ( $args['title'] ) {
        $aria_hidden     = '';
        $unique_id       = uniqid();
        $aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';

        if ( $args['desc'] ) {
            $aria_labelledby = ' aria-labelledby="title-' . $unique_id . ' desc-' . $unique_id . '"';
        }
    }

    // Begin SVG markup.
    $svg = '<svg class="icon icon-' . esc_attr( $args['icon'] ) . '"' . $aria_hidden . $aria_labelledby . ' role="img">';

    // Display the title.
    if ( $args['title'] ) {
        $svg .= '<title id="title-' . $unique_id . '">' . esc_html( $args['title'] ) . '</title>';

        // Display the desc only if the title is already set.
        if ( $args['desc'] ) {
            $svg .= '<desc id="desc-' . $unique_id . '">' . esc_html( $args['desc'] ) . '</desc>';
        }
    }

    /*
     * Display the icon.
     *
     * The whitespace around `<use>` is intentional - it is a work around to a keyboard navigation bug in Safari 10.
     *
     * See https://core.trac.wordpress.org/ticket/38387.
     */
    $svg .= ' <use href="#icon-' . esc_html( $args['icon'] ) . '" xlink:href="#icon-' . esc_html( $args['icon'] ) . '"></use> ';

    // Add some markup to use as a fallback for browsers that do not support SVGs.
    if ( $args['fallback'] ) {
        $svg .= '<span class="svg-fallback icon-' . esc_attr( $args['icon'] ) . '"></span>';
    }

    $svg .= '</svg>';

    return $svg;
}

/**
 * Display SVG icons in social links menu.
 *
 * @param  string  $item_output The menu item output.
 * @param  WP_Post $item        Menu item object.
 * @param  int     $depth       Depth of the menu.
 * @param  array   $args        wp_nav_menu() arguments.
 * @return string  $item_output The menu item output with social icon.
 */
function amorlibre_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
    // Get supported social icons.
    $social_icons = amorlibre_social_links_icons();

    // Change SVG icon inside social links menu if there is supported URL.
    if ( 'social' === $args->theme_location ) {
        foreach ( $social_icons as $attr => $value ) {
            if ( false !== strpos( $item_output, $attr ) ) {
                $item_output = str_replace( $args->link_after, '</span>' . amorlibre_get_svg( array( 'icon' => esc_attr( $value ) ) ), $item_output );
            }
        }
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'amorlibre_nav_menu_social_icons', 10, 4 );

/**
 * Add dropdown icon if menu item has children.
 *
 * @param  string  $title The menu item's title.
 * @param  WP_Post $item  The current menu item.
 * @param  array   $args  An array of wp_nav_menu() arguments.
 * @param  int     $depth Depth of menu item. Used for padding.
 * @return string  $title The menu item's title with dropdown icon.
 */
function amorlibre_dropdown_icon_to_menu_link( $title, $item, $args, $depth ) {
    if ( 'top' === $args->theme_location ) {
        foreach ( $item->classes as $value ) {
            if ( 'menu-item-has-children' === $value || 'page_item_has_children' === $value ) {
                $title = $title . amorlibre_get_svg( array( 'icon' => 'angle-down' ) );
            }
        }
    }

    return $title;
}
add_filter( 'nav_menu_item_title', 'amorlibre_dropdown_icon_to_menu_link', 10, 4 );

/**
 * Returns an array of supported social links (URL and icon name).
 *
 * @return array $social_links_icons
 */
function amorlibre_social_links_icons() {
    // Supported social links icons.
    $social_links_icons = array(
        'behance.net'     => 'behance',
        'codepen.io'      => 'codepen',
        'deviantart.com'  => 'deviantart',
        'digg.com'        => 'digg',
        'docker.com'      => 'dockerhub',
        'dribbble.com'    => 'dribbble',
        'dropbox.com'     => 'dropbox',
        'facebook.com'    => 'facebook',
        'flickr.com'      => 'flickr',
        'foursquare.com'  => 'foursquare',
        'plus.google.com' => 'google-plus',
        'github.com'      => 'github',
        'instagram.com'   => 'instagram',
        'linkedin.com'    => 'linkedin',
        'mailto:'         => 'envelope-o',
        'medium.com'      => 'medium',
        'pinterest.com'   => 'pinterest-p',
        'pscp.tv'         => 'periscope',
        'getpocket.com'   => 'get-pocket',
        'reddit.com'      => 'reddit-alien',
        'skype.com'       => 'skype',
        'skype:'          => 'skype',
        'slideshare.net'  => 'slideshare',
        'snapchat.com'    => 'snapchat-ghost',
        'soundcloud.com'  => 'soundcloud',
        'spotify.com'     => 'spotify',
        'stumbleupon.com' => 'stumbleupon',
        'tumblr.com'      => 'tumblr',
        'twitch.tv'       => 'twitch',
        'twitter.com'     => 'twitter',
        'vimeo.com'       => 'vimeo',
        'vine.co'         => 'vine',
        'vk.com'          => 'vk',
        'wordpress.org'   => 'wordpress',
        'wordpress.com'   => 'wordpress',
        'yelp.com'        => 'yelp',
        'youtube.com'     => 'youtube',
    );

    /**
     * Filter Amorlibre social links icons.
     *
     * @param array $social_links_icons Array of social links icons.
     */
    return apply_filters( 'amorlibre_social_links_icons', $social_links_icons );
}

// Social Settings
$section = 'shopstar-social';

$sections[] = array(
    'id' => $section,
    'title' => __( 'Social Media Links', 'shopstar' ),
    'priority' => '35'
);

$options['shopstar-social-email'] = array(
    'id' => 'shopstar-social-email',
    'label'   => __( 'Email Address', 'shopstar' ),
    'section' => $section,
    'type'    => 'text',
);
$options['shopstar-social-skype'] = array(
    'id' => 'shopstar-social-skype',
    'label'   => __( 'Skype Name', 'shopstar' ),
    'section' => $section,
    'type'    => 'text',
);
$options['shopstar-social-tumblr'] = array(
    'id' => 'shopstar-social-tumblr',
    'label'   => __( 'Tumblr', 'shopstar' ),
    'section' => $section,
    'type'    => 'text',
);
$options['shopstar-social-flickr'] = array(
    'id' => 'shopstar-social-flickr',
    'label'   => __( 'Flickr', 'shopstar' ),
    'section' => $section,
    'type'    => 'text',
);

<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-25
 * Time: 10:16
 * @package Wordpress
 * @subpackage amorlibre
 * This will display a top menu navigation
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="=<?php esc_attr_e( 'Top Menu', 'amorlibre' ); ?>">
    <button class="menu-toogle" aria-controls="top-menu" aria-expanded="false">
        <?php
        echo amorlibre_get_svg( array( 'icon' => 'bars' ) ); // I may have problem with this. I have no amorlibre_get_svg yet.
        echo amorlibre_get_svg( array( 'icon' => 'close' ) );
        _e( 'Menu', 'amorlibre' );
        ?>
    </button>

    <?php
    wp_nav_menu(
            array(
                    'theme_location'    => 'top',
                    'menu_id'           => 'top-menu',
            )
    );
    ?>
    <?php if ( ( amorlibre_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
    <a href="#content" class="menu-scroll-down"><?php echo amorlibre_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'amorlibre' ); ?></span></a>
    <?php endif; ?>
</nav>

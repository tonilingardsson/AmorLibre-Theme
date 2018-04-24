<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-24
 * Time: 22:30
 * Displays footer widgets if assigned
 */
if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) ) :
    ?>

<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'amorlibre' ); ?>">
    <?php
    if (is_active_sidebar( 'sidebar-2' ) ) {
        ?>
            <div class="widget-column footer-widget-1">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
    <?php
    }
    if ( is_active_sidebar( 'sidebar-3' ) ) {
        ?>
            <div class="widget-column footer-widget-2">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
    <?php } ?>
</aside>

<?php endif; ?>
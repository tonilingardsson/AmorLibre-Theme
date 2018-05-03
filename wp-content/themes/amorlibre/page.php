<?php
/**
*This is the template for displaying all pages by default.
*
*@package Wordpress
 * @subpackage amorlibre
 */
get_header();
?>
    <div id="primary" class="content-area <?php echo !is_active_sidebar( 'sidebar-1' ) ? 'full-width' : ''; ?>">

    <main id="main" class="site-main" role="main">
        <?php if ( ! is_front_page() ) : ?>

            <?php if ( function_exists( 'bcn_display' ) ) : ?>
                <div class="breadcrumbs">
                    <?php bcn_display(); ?> // This is to display breadcrumbs. File/routing
                </div>
            <?php endif; ?>

        <?php endif; ?>


        <?php get_template_part( 'template-parts/page/content', 'title' );
        wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) );
        /**
         * Thanks to this part, now I have a menu!
         */
        echo 'This is page.php'; ?>


        <?php while ( have_posts() ) : the_post(); ?>
            <div class="button-primary">
            <button class="button-primary" value="Submit" id="submit" onclick="AnimationEvent">Buy</button>
        </div>

            <?php get_template_part( 'template-parts/page/content', 'page' ); echo 'This is page.php'; ?>
            <div class="button-primary">
                <button value="Submit onclick="addToCart()">Buy</button>
            </div>
            <?php
            // If comments are open load up the comment template.
            if ( comments_open() ) :
                comments_template();
            endif;
            ?>



        <?php endwhile; // End of the loop. ?>

        <?php
        // Prevent weirdness
        wp_reset_postdata();
        ?>

</main>

</div>
<?php
get_footer();

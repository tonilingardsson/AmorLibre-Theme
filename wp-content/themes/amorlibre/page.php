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





        <?php while ( have_posts() ) : the_post(); ?>


            <?php get_template_part( 'template-parts/page/content', 'page' ); ?> <!-- This runs the WP loop through content-page.php-->

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

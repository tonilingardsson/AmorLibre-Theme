<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Wordpress
 * @subpackage amorlibre
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
            <?php
            get_template_part( 'template-parts/footer/footer', 'widgets' );

            if ( has_nav_menu( 'social' ) ) : ?>
                <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'amorlibre' ); ?>">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'social',
                        'menu_class'     => 'social-links-menu',
                        'depth'          => 1,
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                    ) );
                    ?>
                </nav><!-- .social-navigation -->
            <?php endif;
echo 'Footer.php works!';
            get_template_part( 'template-parts/footer/site', 'info' );
            ?>
        </div><!-- .wrap -->
    </footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<?php
/**
 * The AmorLibre main template file. The WP CMS asks me for this file once style.css is created
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage amorlibre
 * 
 */

get_header(); ?>

<div id="wrap">
        <!-- This is for the title -->
        <?php if ( is_home() && ! is_front_page() ) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php else : ?>
            <header class="page-header">
                <h2 class="page-title"><?php _e( 'Posts', 'amorlibre' ); ?></h2>
            </header>
        <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) :

            /* Start the Loop */

            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/post/content' , get_post_format() );

            endwhile; ?>

            <?php
            // Prevent weirdness
            wp_reset_postdata();
            ?>

            <?php the_posts_pagination( array(
            'prev_text' => amorlibre_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'amorlibre' ) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'amorlibre' ) . '</span>' . amorlibre_get_svg( array( 'icon' => 'arrow-right' ) ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'amorlibre' ) . ' </span>',
        ) ); ?>

        <?php else : ?>

            <?php get_template_part( 'library/template-parts/content', 'none' ); ?>

        <?php endif; ?>

        </main>
    </div>
    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

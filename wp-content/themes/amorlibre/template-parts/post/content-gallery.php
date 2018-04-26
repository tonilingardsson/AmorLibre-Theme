<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-26
 * Time: 09:18
 * @package Wordpress
 * @subpackage amorlibre
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <?php
    if ( is_sticky() && is_home() ) {
        echo amorlibre_get_svg( array( 'icon' => 'thumb-tack' ) );
    }
    ?>
    <header class="entry-header">
        <?php
        if ( 'post' === get_post_type() ) {
            if ( is_single() ) {
                amorlibre_posted_on();
            } else {
                echo amorlibre_time_link();
                amorlibre_edit_link();
            };
            echo '</div><!-- This will close div .entry-meta -->';
        };

        if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } elseif ( is_front_page() && is_home() ) {
            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
        } else {
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }
        ?>
    </header>

    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() && ! get_post_gallery() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'amorlibre-featured-image' ); ?>
            </a>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="entry-content">

        <?php
        if ( ! is_single() ) {

            // If not a single post, highlight the gallery.
            if ( get_post_gallery() ) {
                echo '<div class="entry-gallery">';
                echo get_post_gallery();
                echo '</div>';
            };

        };

        if ( is_single() || ! get_post_gallery() ) {

            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'amorlibre' ),
                get_the_title()
            ) );

            wp_link_pages( array(
                'before'      => '<div class="page-links">' . __( 'Pages:', 'amorlibre' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ) );

        };
        ?>

    </div><!-- .entry-content -->

    <?php
    if ( is_single() ) {
        amorlibre_entry_footer();
    }
    ?>

</article>

<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-25
 * Time: 16:50
 * @package Wordpress
 * @subpackage amorlibre
 */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php if ( 'post' === get_post_type() ) :
            /**
             * If there is something to post...
             * it will be posted.
             * And it can be edited through post.
            */
            ?>
            <div class="entry-meta">
                <?php
                echo amorlibre_time_link();
                amorlibre_edit_link();
                ?>
            </div><!-- .entry-meta -->
        <?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) :
            /**
             * Can be used within the WordPress loop or outside of it.
             * Can be used with pages, posts, attachments, and revisions.
             */
            ?>

            <div class="entry-meta">
                <?php amorlibre_edit_link(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>

        <?php
        if ( is_front_page() && ! is_home() ) {
            /**
             * This Conditional Tag checks if the main page is a posts or a Page.
             * The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
             */


            the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
        } else {
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        }
        ?>
    </header><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt();

        /**
         * The Excerpt has two main uses:

         * 1. It replaces the full content in RSS feeds when the option to display summaries is selected in Dashboard › Settings › Reading.
         * 2. Depending on the WordPress theme, it can be displayed in places where quick summaries are preferable to full content:
             * Search results
             * Tag archives
             * Category archives
             * Monthly archives
             * Author archives
         **/

        ?>
    </div><!-- .entry-summary -->

</article><!-- #post-## -->

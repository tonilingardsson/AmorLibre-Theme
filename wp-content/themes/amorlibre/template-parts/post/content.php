<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-25
 * Time: 14:06
 * @package Wordpress
 * @subpackage amorlibre
 */

$classes = 'blog-post-side-layout ';
if ( !has_post_thumbnail() ) {
    $classes = 'post-no-img ';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>

<?php
if ( is_sticky() && is_home() ) : // Two undefined functions!
    echo amorlibre_get_svg( array( 'icon' => 'thumb-tack' ) );
endif;
?>
<header class="entry-header">
    <?php
    if ( 'post' === get_post_type() ) {
        echo '<div class="entry-meta">';
        if ( is_single() ) {
            amorlibre_posted_on();
        } else {
            echo amorlibre_time_link();
            amorlibre_edit_link();
        };
        echo '</div><!-- .entry-meta -->';
    };

    if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
    } elseif ( is_front_page() && is_home() ) {
        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    } // Retrieves the full permalink for the current post or post ID.
    // get_permalink( int|WP_Post $post, bool $leavename = false )
    ?>
</header>

<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'amorlibre-featured-image' ); ?>
        </a>
    </div>
<?php endif; ?>

<div class="entry-content">
    <?php
    /* translators: %s: Name of current post */
    the_content(
        sprintf(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'amorlibre' ),
            get_the_title()
        )
    );

    wp_link_pages(
        array(
            'before'      => '<div class="page-links">' . __( 'Pages:', 'amorlibre' ),
            'after'       => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after'  => '</span>',
        )
    );
    ?>
</div><!-- .entry-content -->

<?php
if ( is_single() ) {
    amorlibre_entry_footer();
}
?>

</article><!-- #post-## -->

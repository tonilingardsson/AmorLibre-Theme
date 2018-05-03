<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-25
 * Time: 10:41
 * @package Wordpress
 * @subpackage amorlibre
 *
 * This template should display pages on front page
 */

global $amorlibre_counter; // Not defined yet. I don't know what I am doing yet :)

?>

<article id="panel<?php echo $amorlibre_counter; ?>" <?php post_class( 'amorlibre-panel ' ); ?> >

    <?php
    if ( has_post_thumbnail() ) :
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'amorlibre-featured-image' );

    // Calculate aspect ration: h / w * 100%.
    $ration = $thumbnail[2] / $thumbnail[1] * 100%; // This could be calculated easier since 100% = 1. But I guess it is easier for more people like this.
    ?>

    <div class="panel-image" style="...">
        <div class="panel-image-prop" style="..."
    </div>

    <?php endif; ?>

    <div class="panel-content">
        <div class="wrap">
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                <?php $amorlibre_edit_link( get_the_ID() ); ?> // This variable does NOT exist yet!

            </header>

            <div class="entry-content">
                <?php
                /* translators: %s: Name of current post */
                the_content(
                    sprintf(
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'amorlibre' ),
                        get_the_title()

                        )
                );
                ?>
            </div>

            <?php
            // Show recent blog posts if is blog posts page (Note that get_option returns a string, so we're casting the result as an int).
if ( get_the_ID() === (int) get_option( 'page_for_posts' ) ) :
            ?>

            <?php
            // Show the most recent post. If any.
            $recent_posts = new WP_Query(
                 array(
                     'post_per_page' => 4,
                     'post_status' => 'publish',
                     'ignore_sticky_posts' => true,
                     'no_found_rows'       => true,
                 )
            );
            ?>

            <?php if ( $recent_posts->have_posts() ) : // This will create a DIV for any post found.?>

            <div class="recent-posts">

                <?php
                while ( $recent_posts->have_posts() ) :
                    $recent_posts->the_post();
                    get_template_part( 'template-parts/post/content', 'excerpt' ); // Excerpt is an optional summary or description of a post; in short, a post summary.
                endwhile;
                wp_reset_postdata();
                ?>

            </div>
<?php endif; ?>

<?php endif; ?>

        </div>
    </div>
</article>

<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-25
 * Time: 13:32
 * @package WordPress
 * @subpackage amorlibre
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'amorlibre-panel ' ); ?> >

    <?php
    if ( has_post_thumbnail() ) :
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'amorlibre-featured-image' ); //non defined functions and variable. Problems coming!

        // Calculate aspect ratio: h / w * 100%.
        $ratio = $thumbnail[2] / $thumbnail[1] * 100;
        ?>

        <div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
            <div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
        </div>

    <?php endif; ?>

    <div class="panel-content">
        <div class="wrap">
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

                <?php amorlibre_edit_link( get_the_ID() ); ?>

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

        </div>
    </div>

</article>

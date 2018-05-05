<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage amorlibre
 */

get_header(); 
?>

<div class="wrapp">Div class="wrapp"
    <div id="primary" class="content-area">
        <main id="primary" class="site-main" role="main">Hello

            <?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/posts/content' );


		    endwhile; // End of the loop. ?>


        </main>End of main
    </div>
</div>

<?php
$params = array('posts_per_page' => 5, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>
<?php if ($wc_query->have_posts()) : ?>
    <?php while ($wc_query->have_posts()) :
        $wc_query->the_post(); ?>
        <?php the_title(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
    <p>
        <?php _e( 'No Products'); ?>
    </p>
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
<?php
get_footer();
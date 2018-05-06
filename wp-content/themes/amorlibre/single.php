<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage amorlibre
 */

get_header(); 
?>

<div class="wrapp">

        <main id="primary" class="site-main" role="main">Single.php
            <img id="primary" class="content-area">
            <?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/page/content', 'page' ); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		  <?php  endwhile; // End of the loop. ?>
          <?php
                $params = array('posts_per_page' => 100, 'post_type' => 'product');
                $wc_query = new WP_Query($params);
            ?>
            <?php if ($wc_query->have_posts()) :
    global $products;
    $product_id = $product->id;
    $product_image = get_the_term_list($product_id, 'product_images');

    /**
     * woocommerce_single_product_summary hook
     *
     * @hooked woocommerce_template_single_title - 5
     * @hooked woocommerce_template_single_rating - 10
     * @hooked woocommerce_template_single_price - 10
     * @hooked woocommerce_template_single_excerpt - 20
     * @hooked woocommerce_template_single_add_to_cart - 30
     * @hooked woocommerce_template_single_meta - 40
     * @hooked woocommerce_template_single_sharing - 50
     */?>
    <?php while ($wc_query->have_posts()) :
    $wc_query->the_post();

    ?>
    <?php the_title(); ?>
<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
            </div>
        </main><!-- End of main -->





    <p>
        <?php _e( 'No Products'); ?>
    </p>
<?php endif; ?>
    <div class="panel-content">
        <div class="wrap">
            <!-- header class="entry-header">
                <?php /** the_title( '<h2 class="entry-title">', '</h2>' ); ?>

                <?php amorlibre_edit_link( get_the_ID() ); */ ?>

            </header -->

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
<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-25
 * Time: 13:49
 *  * @package Wordpress
 * @subpackage amorlibre
 * This template part displays page content in page.php
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>HelloS>

    <div class="entry-content">
        <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'amorlibre' ),
                    'after'  => '</div>',
                )
            );
        ?>
    </div>
</article>

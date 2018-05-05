<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-26
 * Time: 10:18
 * @package Wordpress
 * @subpackage amorlibre
 */
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php _e( 'Nothing found', 'amorlibre'); ?></h1>
    </header>
    <div class="page-content">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

        <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here and now</a>.', 'amorlibre' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
        // I have to create the file post-new.php

        <?php elseif ( is_search() ) : ?>

            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'storefront' ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

        <p><?php _e( 'It seem we cannot find what you were looking for. Perhaps searching can help.','amorlibre' ); ?></p>
        <?php
            get_search_form();
            /**
             * This will display a search form when no results are found. This last line of code is confusing. endif is before the ?>
             */
        endif; ?>
    </div>
</section>

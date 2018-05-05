<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-30
 * Time: 10:54
 * @package wordpress
 * @subpackage amorlibre
 */
 ?>

<header class="entry-header">
    <?php
    if ( is_home() ) :
        wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu_class' ) );
        echo '<h1 class="entry-title">'. get_the_title( get_option('page_for_posts', true) . '</h1>' );

    else:
        wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu_class' ) );
        the_title( '<h1 class="entry-title">', '</h1>' );

    endif;
    ?>
</header>


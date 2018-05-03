<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-30
 * Time: 10:54
 * @package wordpress
 * @subpackage amorlibre
 */
if ( !is_front_page() ) : ?>

<header class="entry-header">
    <?php
    if ( is_home() ) :
        echo '<h1 class="entry-title">'. get_the_title( get_option('page_for_posts', true) . '</h1>' );
    else:
        the_title( '<h1 class="entry-title">', '</h1>' );
    endif;
    ?>
</header>

<?php endif; ?>
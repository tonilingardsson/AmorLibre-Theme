<?php
/**
 * The AmorLibre main template file. The WP CMS asks me for this file once style.css is created
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * 
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main"><h1>Hello World</h1>
    </main>
</div>
<?php
do_action( 'sidebar');
get_footer();

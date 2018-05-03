<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage amorlibre
 */
get_header();
?>

<div class="wrapp">
    <header clas="page-header">
        If statement here for have_posts()
        <h1 class="page-title">Search function in php.
        </h1>
    </header>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            Another if statement in php. And then a while.<p>Sorry, but no matches.</p>
        </main>
    </div>
<?php get_sidebar();
?>
</div>

<?php
get_footer();

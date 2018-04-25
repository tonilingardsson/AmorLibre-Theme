<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wordpress
 * @subpackage amorlibre
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
        <main id="main" class="site-main" role="main">

            <div class="error-404 not-found">

			<header class="page-header">
				<h1 class="page-title page-not-found">Oops! That page can&rsquo;t be found.</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="centered">
					Click here to get back to the Home page.
				</p>
				
				<p class="centered">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button"><?php _e( 'Back to Homepage' ); ?></a>
				</p>
			</div><!-- .page-content -->

            </div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

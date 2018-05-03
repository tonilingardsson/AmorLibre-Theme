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

			<img class="page-content">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="image-align-center-label" ><img class="size-medium wp-image-107" src="http://localhost:8888/wordpress/wp-content/uploads/2018/05/love_not_found_6_by_strawberrygina-d8tb039-205x300.jpg" alt="404_love_not_found" width="205" height="300" style="margin-left: 40%;"/></a>
				<p class="centered" style="text-align: center;">
					Click here to get back to the Home page.
				</p>

				
				<p class="centered" style="text-align: center;">
                    <button class="button-primary"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button"><strong><?php _e( 'Back Home' ); ?></a></strong></a></button>
				</p>
			</div><!-- .page-content -->

            </div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

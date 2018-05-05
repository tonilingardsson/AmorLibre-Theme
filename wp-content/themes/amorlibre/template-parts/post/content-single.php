<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-05-04
 * Time: 13:36
 */

<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'amorlibre_single_post_top' );

	/**
	 * Functions hooked into amorlibre_single_post add_action
	 *
	 * @hooked amorlibre_post_header          - 10
	 * @hooked amorlibre_post_meta            - 20
	 * @hooked amorlibre_post_content         - 30
	 */
	do_action( 'amorlibre_single_post' );

	/**
	 * Functions hooked in to amorlibre_single_post_bottom action
	 *
	 * @hooked amorlibre_post_nav         - 10
	 * @hooked amorlibre_display_comments - 20
	 */
	do_action( 'amorlibre_single_post_bottom' );
	?>

</div><!-- #post-## -->
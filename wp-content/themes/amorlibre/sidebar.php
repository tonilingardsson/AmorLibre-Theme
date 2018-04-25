<?php
/**
 * The sidebar containing the main widget area
 * This page will allow me to manage the widgets installed in my CMS
 * @package WordPress
 * @subpackage amorlibre
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) { // another conditional statement
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'amorlibre' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
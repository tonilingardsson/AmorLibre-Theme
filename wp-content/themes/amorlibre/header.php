<?php
/**
 * The header for amorlibre theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wordpress
 * @subpackage amorlibre
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


		<div class="col-full">
<?php get_template_part( 'template-parts/page/content', 'title' );
 ?>
		</div>


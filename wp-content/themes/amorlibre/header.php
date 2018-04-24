<?php
/**
 * The header for amorlibre theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wordpress
 */

?><!DOCTYPE html><!-- AmorLibre by Toni Lingårdsson -->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner" >
		<div class="col-full">

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content" tabindex="-1"><!-- This div needs to be closed in the footer -->
		<div class="col-full"><!-- This div needs to be closed in the footer -->

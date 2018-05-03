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


<?php

/**
 *
 * I found out that if I have some code that is wrong stops reading
 *
 * if ( get_theme_mod( 'amorlibre-header-layout', customizer_library_get_default( 'amorlibre-header-layout' ) ) == 'amorlibre-header-layout-centered' ) :
    get_template_part( 'template-parts/header/header', 'centered' );
else :
    get_template_part( 'template-parts/header/header', 'left-aligned' );
endif; */



?>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner" >
		<div class="col-full">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); /** Finally a nav menu at the header */ ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content" tabindex="-1"><!-- Here is header.php -->
		<div class="col-full"><!-- End of header.php displayed in index.php -->

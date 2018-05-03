<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-25
 * Time: 08:25
 * @package Wordpress
 *  * @subpackage amorlibre
 * Displays footer site info
 */
?><div class="site-info">
    <a href="<?php echo esc_url( __ ( 'https://tonilingardsson.se' ) ); ?>"><?php printf( __ ( 'Designed by %s', 'Toni Lingårdsson'), 'Toni Lingårdsson' ); ?></a><br><br>
    <a href="<?php echo esc_url( __ ( 'https://tonilingardsson.se' ) ); ?>"><?php printf( __ ( 'Follow us at: %s', 'Toni Lingårdsson'), '<br><ol><li>Facebook</li><li>Instagram</li><li>Twitter</li><li>Snapchat</li></ol>'); ?></a>
    <a href="<?php echo esc_url( get_theme_mod( 'amorlibre-icon-functions-facebook' ) ) . '" target="_blank" title="' . __( 'Find us on Facebook', 'amorlibre' ) . '" class="facebook"><i class="fa fa-facebook"></i>';?>"</a>

</div>
<div class="site-info">
    <a href="<?php echo esc_url( __ ( 'http://localhost:8888/wordpress/about-us/' ) ); ?>"><?php printf( __ ( 'About us', 'About us'), 'About us' ); ?></a>&thinsp;
    <a href="<?php echo esc_url( __ ( 'http://localhost:8888/wordpress/contact/' ) ); ?>"><?php printf( __ ( 'Designed by %s', 'Toni Lingårdsson'), 'Toni Lingårdsson' ); ?></a>
    <a href="<?php echo esc_url( __ ( 'https://facebook.com/amorlibre' ) ) . '" target="_blank" title="' . __( 'Find us on Facebook', 'amorlibre' ) . ' class="facebook">';?><i class="fa fa-facebook"></i>F</a>
    <a href="<?php echo esc_url( __ ( 'https://tonilingardsson.se' ) ); ?>"><?php printf( __ ( 'Designed by %s', 'Toni Lingårdsson'), 'Toni Lingårdsson' ); ?></a>
</div>

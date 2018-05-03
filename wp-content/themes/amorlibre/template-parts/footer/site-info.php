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
?><div class="site-info" style="text-align: center; background: black; padding-top: 5px; padding-bottom: 5px;">

    <a style="text-decoration: none; color: #fedcd2;" href="<?php echo esc_url( __ ( '' ) ); ?>"><?php printf( __ ( 'Follow us at: %s', 'Social Media'), '<br><br>
    <a href="<?php echo esc_url( __ ( \'https://facebook.com/amorlibre.net\' ) ) . \'" target="_blank" style="color: #fedcd2;" title="\' . __( \'Find us on Facebook\', \'amorlibre.net\' ) . \' class="facebook"><i class="fa fa-facebook"></i></a>&thinsp;
    <a href="<?php echo esc_url( __ ( \'https://instagram.com/amorlibre.shop\' ) ) . \'" target="_blank" style="color: #fedcd2;" title="\' . __( \'Find us on Instagram\', \'amorlibre.net\' ) . \' class="instagram"><i class="fa fa-instagram"></i></a>&thinsp;
    <a href="<?php echo esc_url( __ ( \'https://snapchat.com/amorlibre.shop\' ) ) . \'" target="_blank" style="color: #fedcd2;" title="\' . __( \'Find us on SnapChat\', \'amorlibre.net\' ) . \' class="snapchat"><i class="fa fa-snapchat"></i></a>&thinsp;
    <a href="<?php echo esc_url( __ ( \'https://youtube.com/amorlibre.net\' ) ) . \'" target="_blank" style="color: #fedcd2;" title="\' . __( \'Find us on youtube\', \'amorlibre.net\' ) . \' class="youtube"><i class="fa fa-youtube"></i></a>&thinsp;'); ?></a>

    <br><br>
    <a href="<?php echo esc_url( __ ( 'http://localhost:8888/wordpress/about-us/' ) ); ?>" style="color: #fedcd2;"><?php printf( __ ( 'About us', 'About us'), 'About us' ); ?></a>&thinsp;&thinsp;
    <a href="<?php echo esc_url( __ ( 'http://localhost:8888/wordpress/contact/' ) ); ?>" style="color: #fedcd2;"><?php printf( __ ( 'Contact') ); ?></a>&thinsp;&thinsp;
    <a href="<?php echo esc_url( __ ( 'https://tonilingardsson.se' ) ); ?>" target="_blank"><?php printf( __ ( '%s', 'Toni Lingårdsson'), '<a href="<?php echo esc_url( __ ( \'https://tonilingardsson.se\' ) ) . \'" target="_blank" title="\' . __( \'Designed by Toni Lingårdsson\', \'amorlibre.net\' ) . \' class="code"><i class="fa fa-code" style="color: #fedcd2;"> by Toni Lingårdsson</i></a>&thinsp;' ); ?></a>


</div>

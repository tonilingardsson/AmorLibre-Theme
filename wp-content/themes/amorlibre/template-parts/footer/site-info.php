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

   
 
    <a href="<?php echo esc_url( __ ( 'http://localhost:8888/wordpress/about-us/' ) ); ?>" style="color: #fedcd2;"><?php printf( __ ( 'About us', 'About us'), 'About us' ); ?></a>&thinsp;&thinsp;
    <a href="<?php echo esc_url( __ ( 'http://localhost:8888/wordpress/contact/' ) ); ?>" style="color: #fedcd2;"><?php printf( __ ( 'Contact') ); ?></a>&thinsp;&thinsp;
    <a href="<?php echo esc_url( __ ( 'https://tonilingardsson.se' ) ); ?>" target="_blank"><?php printf( __ ( '%s', 'Toni Lingårdsson'), '<a href="<?php echo esc_url( __ ( \'https://tonilingardsson.se\' ) ) . \'" target="_blank" title="\' . __( \'Designed by Toni Lingårdsson\', \'amorlibre.net\' ) . \' class="code"><i class="fa fa-code" style="color: #fedcd2;"> by Toni Lingårdsson</i></a>&thinsp;' ); ?></a>


</div>

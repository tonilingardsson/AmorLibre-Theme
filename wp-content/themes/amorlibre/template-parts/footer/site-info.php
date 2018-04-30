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
    <a href="<?php echo esc_url( __ ( 'https://tonilingardsson.se' ) ); ?>"><?php printf( __ ( 'Follow us at: %s', 'Toni Lingårdsson'), '<br><ul><li>Facebook</li><li>Instagram</li><li>Twitter</li><li>Snapchat</li></ul>'); ?></a>
    <a href="<?php echo esc_url( get_theme_mod( 'amorlibre-icon-functions-facebook' ) ) . '" target="_blank" title="' . __( 'Find us on Facebook', 'amorlibre' ) . '" class="facebook"><i class="fa fa-facebook"></i>';?>"</a>

</div>
<div class="site-info">
    echo
</div>
<div class="site-info shopstar-social" >
<ul class="shopstar-social">

    <?php
    if( get_theme_mod( 'shopstar-social-email', customizer_library_get_default( 'shopstar-social-email' ) ) != '' ) :
        echo '<li><a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'shopstar-social-email' ), 1 ) ) . '" title="' . __( 'Send us an email', 'shopstar' ) . '" class="email"><i class="fa fa-envelope-o"></i></a></li>';
    endif;

    if( get_theme_mod( 'shopstar-social-skype', customizer_library_get_default( 'shopstar-social-skype' ) ) != '' ) :
        echo '<li><a href="skype:' . esc_html( get_theme_mod( 'shopstar-social-skype' ) ) . '?userinfo" title="' . __( 'Contact us on Skype', 'shopstar' ) . '" class="skype"><i class="fa fa-skype"></i></a></li>';
    endif;

    if( get_theme_mod( 'shopstar-social-tumblr', customizer_library_get_default( 'shopstar-social-tumblr' ) ) != '' ) :
        echo '<li><a href="' . esc_url( get_theme_mod( 'shopstar-social-tumblr' ) ) . '" target="_blank" title="' . __( 'Find us on Tumblr', 'shopstar' ) . '" class="tumblr"><i class="fa fa-tumblr"></i></a></li>';
    endif;

    if( get_theme_mod( 'shopstar-social-flickr', customizer_library_get_default( 'shopstar-social-flickr' ) ) != '' ) :
        echo '<li><a href="' . esc_url( get_theme_mod( 'shopstar-social-flickr' ) ) . '" target="_blank" title="' . __( 'Find us on Flickr', 'shopstar' ) . '" class="flickr"><i class="fa fa-flickr"></i></a></li>';
    endif;
    ?>

</ul>
</div>

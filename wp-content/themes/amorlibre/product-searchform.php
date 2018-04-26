<?php
/**
 * Created by PhpStorm.
 * User: lingardssonluna
 * Date: 2018-04-26
 * Time: 13:39
 * This is a template for displaying search forms
 */
?>
<form role="search" method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod( 'amorlibre-search-placeholder-text', customizer_library_get_default( 'amorlibre-search-placeholder-text' ) ) ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="s" title="<?php _ex( 'Search for:', 'label', 'amorlibre' ); ?>" />
        <label>
            <button type="submit" id="searchsubmit" class="search-submit">
                <i class="fa fa-search"></i>
            </button>
            <input type="hidden" name="post_type" value="product" />
</form>

<div class="clearboth"></div>
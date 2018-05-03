<?php

function uws_get_product_taxonomies_slug_by_id( $uws_tax_ids ) {
	if ( empty( $uws_tax_ids ) ) {
		return array();
	}

	$uws_args = array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => false,
	);

	$uws_terms = get_terms( $uws_args );

	$uws_taxonomies_slug = array();
	foreach ( $uws_terms as $uws_item ) {
		if ( in_array( $uws_item->term_id, $uws_tax_ids ) ) {
			$uws_taxonomies_slug[ $uws_item->slug ] = $uws_item->slug;
		}
	}

	return $uws_taxonomies_slug;
}



<?php

// Reference page full - stripe with tags

add_action('acf/init', 'stripe_with_tags_ref_full');
function stripe_with_tags_ref_full() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'stripe-with-tags',
			'title'				=> __('Stripe with tags'),
			'description'		=> __('Stripe with tags block.'),
			'render_callback'	=> 'stripe_with_tags_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Stripe with tags', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function stripe_with_tags_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}

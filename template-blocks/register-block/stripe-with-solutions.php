<?php

// Reference page full - stripe with solutions

add_action('acf/init', 'stripe_with_solutions_ref_full');
function stripe_with_solutions_ref_full() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'stripe-with-solutions',
			'title'				=> __('Stripe with solutions'),
			'description'		=> __('Stripe with solutions block.'),
			'render_callback'	=> 'stripe_with_solutions_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Stripe with solutions', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function stripe_with_solutions_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
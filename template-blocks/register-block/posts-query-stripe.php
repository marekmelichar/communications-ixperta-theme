<?php

// posts_query_stripe

add_action('acf/init', 'posts_query_stripe');
function posts_query_stripe() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'posts-query-stripe',
			'title'				=> __('Posts query stripe'),
			'description'		=> __('Posts query stripe block.'),
			'render_callback'	=> 'posts_query_stripe_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'posts query stripe', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function posts_query_stripe_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
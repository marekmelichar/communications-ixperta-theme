<?php

// Custom reference banner block

add_action('acf/init', 'reference_banner_acf_init');
function reference_banner_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'reference-banner',
			'title'				=> __('Custom reference banner'),
			'description'		=> __('Custom reference banner block.'),
			'render_callback'	=> 'reference_banner_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Custom reference banner', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function reference_banner_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}

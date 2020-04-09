<?php

// Little call to action block

add_action('acf/init', 'little_call_to_action_acf_init');
function little_call_to_action_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'little-call-to-action',
			'title'				=> __('Little call to action'),
			'description'		=> __('Little call to action block.'),
			'render_callback'	=> 'little_cta_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Little call to action', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function little_cta_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
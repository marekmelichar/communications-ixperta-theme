<?php

// Two gray green columns - block

add_action('acf/init', 'two_gray_green_columns_acf_init');
function two_gray_green_columns_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'two-gray-green-columns',
			'title'				=> __('Two gray green columns'),
			'description'		=> __('Two gray green columns block.'),
			'render_callback'	=> 'two_gray_green_columns_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Two gray green columns', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function two_gray_green_columns_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
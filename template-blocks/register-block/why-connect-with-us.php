<?php

// why connect with us

add_action('acf/init', 'why_connect_with_us');
function why_connect_with_us() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'why-connect-with-us',
			'title'				=> __('Why connect with us'),
			'description'		=> __('why connect with us block.'),
			'render_callback'	=> 'why_connect_with_us_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'why connect with us', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function why_connect_with_us_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
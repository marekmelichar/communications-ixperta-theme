<?php

// How it works block

add_action('acf/init', 'how_it_works_acf_init');
function how_it_works_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'how-it-works',
			'title'				=> __('How it works'),
			'description'		=> __('How it works block.'),
			'render_callback'	=> 'howitworks_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'how it works', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function howitworks_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
<?php

// custom section block

add_action('acf/init', 'custom_section_acf_init');
function custom_section_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a section block
		acf_register_block(array(
			'name'				=> 'custom-section',
			'title'				=> __('Custom section'),
			'description'		=> __('Custom section block.'),
			'render_callback'	=> 'custom_section_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Custom section', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function custom_section_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}

<?php

// Contact

add_action('acf/init', 'contact');
function contact() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'contact-about-us',
			'title'				=> __('Contact block'),
			'description'		=> __('Contact block.'),
			'render_callback'	=> 'contact_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'contact', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function contact_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
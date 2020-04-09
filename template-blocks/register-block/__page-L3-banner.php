<?php

// Custom page_L3 banner block

add_action('acf/init', 'page_L3_banner_acf_init');
function page_L3_banner_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'page-L3-banner',
			'title'				=> __('Custom page_L3 banner'),
			'description'		=> __('Custom page_L3 banner block.'),
			'render_callback'	=> 'page_L3_banner_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Custom page_L3 banner', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function page_L3_banner_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}

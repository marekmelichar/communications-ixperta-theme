<?php

// Custom ixp-page-level-three-banner

add_action('acf/init', 'ixp_page_level_three_banner_acf_init');
function ixp_page_level_three_banner_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'ixp-page-level-three-banner',
			'title'				=> __('Ixp page level_three banner'),
			'description'		=> __('Ixp page level_three banner block.'),
			'render_callback'	=> 'ixp_page_level_three_banner_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'ixp page level_three banner', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function ixp_page_level_three_banner_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}

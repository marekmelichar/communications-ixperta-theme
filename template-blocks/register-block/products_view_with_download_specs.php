<?php

// products_view_with_download_specs

add_action('acf/init', 'products_view_with_download_specs');
function products_view_with_download_specs() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'products-view-with-download-specs',
			'title'				=> __('Products view with download specs'),
			'description'		=> __('Products view with download specs block.'),
			'render_callback'	=> 'products_view_with_download_specs_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'products_view_with_download_specs', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function products_view_with_download_specs_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
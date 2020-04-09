<?php

// Icon content dotted border - block

add_action('acf/init', 'icon_content_dotted_border_acf_init');
function icon_content_dotted_border_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'icon-content-dotted-border',
			'title'				=> __('Icon content dotted border'),
			'description'		=> __('Icon content dotted border block.'),
			'render_callback'	=> 'icon_content_dotted_border_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Icon content dotted border', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function icon_content_dotted_border_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
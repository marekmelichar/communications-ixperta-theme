<?php

// data-loss-prevention block

add_action('acf/init', 'data_loss_prevention_acf_init');
function data_loss_prevention_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a section block
		acf_register_block(array(
			'name'				=> 'data-loss-prevention',
			'title'				=> __('Data loss prevention'),
			'description'		=> __('Data loss prevention block.'),
			'render_callback'	=> 'data_loss_prevention_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Data loss prevention', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function data_loss_prevention_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}

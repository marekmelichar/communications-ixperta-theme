<?php

// Reference page full - personal reference

add_action('acf/init', 'personal_reference_ref_full');
function personal_reference_ref_full() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'personal-reference',
			'title'				=> __('Stripe Personal reference'),
			'description'		=> __('Personal reference block.'),
			'render_callback'	=> 'personal_reference_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Personal reference', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function personal_reference_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
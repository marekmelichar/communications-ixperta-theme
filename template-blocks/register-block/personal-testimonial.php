<?php

// custom personal_testimonial block

add_action('acf/init', 'custom_personal_testimonial_acf_init');
function custom_personal_testimonial_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a personal_testimonial block
		acf_register_block(array(
			'name'				=> 'custom-personal-testimonial',
			'title'				=> __('Custom personal testimonial'),
			'description'		=> __('Custom personal testimonial block.'),
			'render_callback'	=> 'custom_personal_testimonial_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Custom personal testimonial', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function custom_personal_testimonial_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}

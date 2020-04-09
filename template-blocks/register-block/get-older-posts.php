<?php

// get_older_posts

add_action('acf/init', 'get_older_posts');
function get_older_posts() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'get-older-posts',
			'title'				=> __('Get older posts block'),
			'description'		=> __('Get older posts block.'),
			'render_callback'	=> 'get_older_posts_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'get older posts', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function get_older_posts_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
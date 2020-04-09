<?php

// tiles of posts

add_action('acf/init', 'tiles_of_posts');
function tiles_of_posts() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'tiles-of-posts',
			'title'				=> __('Tiles of posts'),
			'description'		=> __('tiles of posts block.'),
			'render_callback'	=> 'tiles_of_posts_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'tiles of posts', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function tiles_of_posts_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
<?php

define( 'THEME_DIRECTORY', get_template_directory() );

/**
 * Theme Support and Site Settings
 */
require_once THEME_DIRECTORY . '/inc/site-settings.php';

/**
 * Scripts and Styles
 */
require_once THEME_DIRECTORY . '/inc/enqueue-scripts.php';

/**
 * Cleanup WordPress and Reorder menus
 */
require_once THEME_DIRECTORY . '/inc/cleanup-reorder.php';

/**
 * Hide the main content editor if not necessary
 */
require_once THEME_DIRECTORY . '/inc/hide-the-editor.php';

/**
 * Register Sidebars
 */
// require_once THEME_DIRECTORY . '/inc/sidebars-widgets.php';

/**
 * Shortcodes
 */
require_once THEME_DIRECTORY . '/inc/shortcode_get_post.php';
require_once THEME_DIRECTORY . '/inc/shortcode_button.php';

/**
 * Customizer
 */
require_once THEME_DIRECTORY . '/inc/customizer.php';

/**
 * Theme Options Page
 */
// require_once THEME_DIRECTORY . '/inc/theme-options-page.php';


// require_once THEME_DIRECTORY . '/inc/template-functions.php';
// require_once THEME_DIRECTORY . '/inc/template-tags.php';




if ( ! function_exists( 'log_me' ) ) :
	/**
	 * Simple error logging
	 *
	 * @param $message
	 * @return bool
	 */
	function log_me( $message )
	{
		if ( true !== WP_DEBUG ) return false;

		if ( is_array($message) || is_object($message) ) {
			return error_log( json_encode($message) );
		}

		return error_log( $message );
	}

endif;


if ( ! function_exists( 'extend_array' ) ) :

	/**
	 * jQuery style array extend
	 *
	 * @return array
	 */
	function extend_array()
	{
		$args     = func_get_args();
		$extended = array();

		if ( is_array( $args ) && count( $args ) )
		{
			foreach ( $args as $array )
			{
				if ( ! is_array( $array ) )	continue;
				$extended = array_merge( $extended, $array );
			}
		}

		return $extended;
	}

endif;



/**
 * ACF PRO Options Page
 * Global OPTIONS
 * HEADER & FOOTER
 *
 *
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Help Widget Settings',
		'menu_title'	=> 'Help Widget',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Global Strings',
		'menu_title'	=> 'Global Strings',
		'parent_slug'	=> 'theme-general-settings',
	));

}






// OPTIONALLY CAN USE ICONS IN SHORTCODE :

function ikona_facebook() {
  ob_start();
  get_template_part('svg/ikona_facebook.svg');
  return ob_get_clean();
}
add_shortcode('ikona_facebook', 'ikona_facebook');



function ikona_linkedin() {
  ob_start();
  get_template_part('svg/ikona_linkedin.svg');
  return ob_get_clean();
}
add_shortcode('ikona_linkedin', 'ikona_linkedin');



function ikona_youtube() {
  ob_start();
  get_template_part('svg/ikona_youtube.svg');
  return ob_get_clean();
}
add_shortcode('ikona_youtube', 'ikona_youtube');






// function language_selector_flags(){
//     $languages = icl_get_languages('skip_missing=0&orderby=code');
//     if(!empty($languages)){
//         foreach($languages as $l){
//             if(!$l['active']) echo '<a href="'.$l['url'].'">';
//             echo '<img src="'.$l['country_flag_url'].'" height="15" alt="'.$l['language_code'].'" width="23" />';
//             if(!$l['active']) echo '</a>';
//         }
//     }
// }

















// Create Custom Post Type = "Reference"


function create_posttype_reference() {
  register_post_type( 'reference',
    array(
      'labels' => array(
        'name' => __( 'References' ),
        'singular_name' => __( 'Reference' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'reference'),
			'supports' => array('title', 'editor'),
			'taxonomies' => array('category', 'post_tag'),
			'can_export' => true,
			'show_in_rest' => true,
			'rest_base' => 'reference'
    )
  );
}
add_action( 'init', 'create_posttype_reference' );




// Make sure we get the tags for Custom Post Type = "Reference"

function wpa_cpt_tags( $query ) {
    if ( $query->is_tag() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'reference' ) );
    }
}
add_action( 'pre_get_posts', 'wpa_cpt_tags' );


















// PLUGIN Safe SVG is probably better choice
// function cc_mime_types($mimes) {
//   $mimes['svg'] = 'image/svg+xml';
//   return $mimes;
// }
// add_filter('upload_mimes', 'cc_mime_types');

















function show_tags($post_object) {

  $post_tags = get_the_tags($post_object);

  if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
      $out .= '<a href="/tag/'.$tag->slug.'">' . $tag->name . '</a>';
    }
  }

  return trim($out);

}



















// ACF PRO BLOCKS for Gutenberg :

require_once THEME_DIRECTORY . '/template-blocks/register-block/banner.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/contact-about-us.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/get-older-posts.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/posts-query-stripe.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/products.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/references.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/services.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/tiles-of-posts.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/why-connect-with-us.php';


require_once THEME_DIRECTORY . '/template-blocks/register-block/custom-heading.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/reference-banner.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/custom-section.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/personal-testimonial.php';
// require_once THEME_DIRECTORY . '/template-blocks/register-block/page-L3-banner.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/heading-and-arguments.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/data-loss-prevention.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/how-it-works.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/little-call-to-action.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/two-gray-green-columns.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/icon-content-dotted-border.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/stripe-with-tags.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/stripe-with-solutions.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/personal-reference.php';

require_once THEME_DIRECTORY . '/template-blocks/register-block/ixp_page_level_three_banner.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/products_view_with_download_specs.php';
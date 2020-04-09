<?php

add_shortcode( 'get_post', 'post_by_id' );
function post_by_id( $atts ) {

  $atts = shortcode_atts( array(
    'id' => '',
    'posts_per_page' => '1'
  ), $atts );

  $my_id = $atts['id'];
  $post_by_id = get_post($my_id);
      $post_custom_excerpt_image = get_field('post_custom_excerpt_image', $my_id);

        $out = '
          <div class="row get_post no-gutters">
            <div class="col-4 pr-2">
              <img src=" '. $post_custom_excerpt_image['url'] .' " alt=" '. $post_custom_excerpt_image['alt'] .' " />
            </div>
            <div class="col-8">
              <h4><a href="'. $post_by_id->guid .'" title="' . $post_by_id->post_title . '">'. $post_by_id->post_title .'</a></h4>
              <p>'. $post_by_id->post_excerpt .'</p>
            </div>';
  $out .='</div>';

  return html_entity_decode($out);
}
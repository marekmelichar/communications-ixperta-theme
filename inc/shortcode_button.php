<?php

add_shortcode( 'button', 'button_func' );
function button_func( $atts ) {

  $atts = shortcode_atts( array(
    'bg' => '#00B388',
    'color' => '#fff',
    'text' => '',
    'href' => '#',
    'class' => 'btn shortcode-btn'
  ), $atts );

  $return = '<a class="'.$atts['class'].'" href="'.$atts['href'].'" target="_blank" style="background: '.$atts['bg'].'; color: '.$atts['color'].'; padding: 0.5rem 2rem; position: relative; border-radius: 25px;">';
    $return .= $atts['text'];
  $return .='</a>';
  
  $return .='<style>';
    $return .='.shortcode-btn:hover {
      background: '.$atts['bg'].';
      opacity: 0.9;
      color: '.$atts['color'].';
    }';
  $return .='</style>';

  return html_entity_decode($return);
}

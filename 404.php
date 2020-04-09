<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="container">
    <div class="row">
      <div class="col">
        <h1><?php the_field('404_nothing_found', 'options'); ?></h1>
        <a href="/">
          <div class="my-5">
            <?php the_field('404_back_to_home', 'options'); ?>
          </div>
        </a>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

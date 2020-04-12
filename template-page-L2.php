<?php
	/* Template Name: Page Level 2 */
?>

<?php get_header() ?>

	<?php if ( have_posts() ) : ?>
	<div class="post-list">
		<?php while ( have_posts() ) : the_post() ?>

			<article <?php post_class() ?>>

				<?php the_content(); ?>

				<?php //get_template_part('partials/page_children_tiles'); ?>

			</article>

		<?php endwhile ?>
	</div>
	<?php endif ?>

<?php get_footer() ?>

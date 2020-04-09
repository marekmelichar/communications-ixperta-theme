<?php
	/* Template Name: Container Page */
?>

<?php get_header() ?>

	<?php if ( have_posts() ) : ?>
	<div class="post-list gdpr">
		<?php while ( have_posts() ) : the_post() ?>

			<article <?php post_class() ?>>

				<div class="container">
					<div class="row">
						<div class="col">
							<?php the_content(); ?>
						</div>
					</div>
				</div>


			</article>

		<?php endwhile ?>
	</div>
	<?php endif ?>

<?php get_footer() ?>

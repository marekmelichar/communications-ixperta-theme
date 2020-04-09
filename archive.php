<?php
	/* Template Name: Archive */
?>

<?php get_header() ?>

		<?php
		if ( have_posts() ) : ?>

			<div class="blog gray-gradient-bg">

				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="text-uppercase">
								<?php the_field('archive_string', 'options'); ?>
								<?php single_tag_title(); ?>
							</h1>
						</div>
					</div>
				</div>

				<section class="get_older_posts"><!-- GET POSTS BY TAG ( we are reusing the "get_older_posts" className, dont overwrite it ) -->
					<div class="container">

							<?php $index = 1; ?>

									<div class="row">

									<?php while ( have_posts() ) : the_post();?>

											<?php $post_custom_excerpt_image = get_field('post_custom_excerpt_image'); ?>

											<?php if(($index % 3) == 1) { ?>
												</div>
												<div class="row no-gutters grouped-posts <?php if($index == 1): ?> 0 <?php else: ?> mt-5 <?php endif; ?>">
											<?php } ?>

													<div class="col-md-4">
														<div class="row no-gutters">
															<div class="col-6 pr-3">
																<div class="post_custom_excerpt_image" style="background-image: url(<?php echo $post_custom_excerpt_image['url'] ?>);"></div>
															</div>
															<div class="col-6 pr-3">
																<h3>
																	<a href="<?php the_permalink(); ?>">
																		<?php echo wp_trim_words( get_the_title(), 4, '...' ); ?>
																	</a>
																</h3>
																<div class="published-date">
																	<?php echo get_the_date(); ?>
																</div>
																<div class="excerpt">
																	<?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?>
																</div>
																<a class="arrow-green-circle" href="<?php the_permalink(); ?>">
																	<i class="fas fa-chevron-right"></i>
																</a>
															</div>
														</div>
													</div>

										<?php $index++; ?>
									<?php endwhile; ?>

								</div>

							<?php wp_reset_query(); ?>
							<?php wp_reset_postdata(); ?>
					</div>
				</section><!-- / GET POSTS BY TAG -->


			</div>

		<?php else :

			// get_template_part( 'template-parts/post/content', 'none' );
			?>

			<div class="container">
				<div class="row">
					<div class="col">
						<h1>
							<?php //echo __('Žádné příspěvky jsme nenašli...'); ?>
							<?php the_field('archive_nothing_found', 'options'); ?>
						</h1>
					</div>
				</div>
			</div>

		<?php endif; ?>

<?php get_footer() ?>

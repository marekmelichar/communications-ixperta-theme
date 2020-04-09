<?php get_header() ?>

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<?php get_template_part('partials/reference_full'); ?>

			<?php endwhile; ?>

			<?php

			// the_posts_pagination( array(
			// 	'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'ixperta' ) . '</span>',
			// 	'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'ixperta' ) . '</span>',
			// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ixperta' ) . ' </span>',
			// ) );

			?>



			<?php

		else :

			// get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

<?php get_footer() ?>

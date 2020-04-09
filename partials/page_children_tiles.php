<article id="page_children_tiles">
  <div class="container">
    <div class="row justify-content-center">

      <?php

      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );


      $parent = new WP_Query( $args );

      if ( $parent->have_posts() ) : ?>

          <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

            <?php $href = get_permalink(); ?>
            <?php $background_image = get_field('background_image'); ?>
            <?php $icon = get_field('svg_icon'); ?>

            <div class="col-md-3 child-page__tile">
              <div class="tile-img" style="background-image: url(<?php echo $background_image['url']; ?>);">
                <div class="tile-img-overlay"></div>
                <?php if($icon): ?>
                  <div class="svg img tile-svg">
                    <?php if (strpos($icon['url'], '.svg') == true) { ?>
                      <?php echo file_get_contents($icon['url']); ?>
                    <?php } else { ?>
                      <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">
                    <?php } ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="tile-body">
                <div class="heading"><?php echo the_field('heading'); ?></div>
                <div class="description"><?php echo the_field('description'); ?></div>
              </div>
              <a class="tile-footer arrow-green-circle" href="<?php echo $href ?>">
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>

          <?php endwhile; ?>

      <?php endif; wp_reset_postdata(); ?>

    </div>
  </div>
</article>

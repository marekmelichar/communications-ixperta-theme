<?php

get_header();

?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="text-uppercase">
        <?php the_field('references_archive_heading', 'options'); ?>
      </h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row reference-tiles">
    <?php

    $args = array(
      'post_type' => 'reference',
      'posts_per_page' => -1,
      'meta_key'			=> 'orderby',
      'orderby'			=> 'meta_value',
      'order'				=> 'ASC'
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="col-md-3 reference-tiles__tile">
          <?php $image = get_field('tile_svg_in_tile') ?>
          <?php $show_href = get_field('show_href') ?>
          <?php if($show_href): ?><a class="link-tile" href="<?php the_permalink(); ?>"><?php endif; ?>
            <?php if($image): ?>
              <div class="svg img">
                <?php if (strpos($image['url'], '.svg') == true) { ?>
                  <?php echo file_get_contents($image['url']); ?>
                <?php } else { ?>
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                <?php } ?>
              </div>
            <?php endif; ?>
            <div class="heading">
              <h2><?php the_title(); ?></h2>
            </div>
          <?php if($href): ?></a><?php endif; ?>

          <?php if($show_href): ?>
            <a class="link" href="<?php the_permalink(); ?>">
              <div class="arrow-green-circle">
                <i class="fas fa-chevron-right"></i>
              </div>
            </a>
          <?php endif; ?>
      </div>



    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>

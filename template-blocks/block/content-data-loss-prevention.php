<?php
/**
 * Block Name: data-loss-prevention
 *
 *
 */

// create id attribute for specific styling
$id = 'data-loss-prevention-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('heading'); ?></h1>
        <p class="description"><?php echo the_field('subheading'); ?></p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php if( have_rows('repeater') ): ?>
        <?php $i = 1; ?>
          <?php while( have_rows('repeater') ): the_row(); ?>
            <?php $count = count(get_field('repeater')); ?>

            <?php
              $image = get_sub_field('svg_graphics');
              $content = get_sub_field('content', false, false);
            ?>

            <div class="col-md">
              <div class="image_or_svg">
                <?php if (strpos($image['url'], '.svg') == true) { ?>
                  <?php echo file_get_contents($image['url']); ?>
                <?php } else { ?>
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                <?php } ?>
              </div>
              <div class="content">
                <?php echo $content; ?>
              </div>
            </div>

            <?php $i++; ?>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>  
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    padding-top: 1.5rem;
    padding-bottom: 1rem;
  }
  
  #<?php echo $id; ?> .description {
    text-align: center;
  }

  #<?php echo $id; ?> .image_or_svg {
    text-align: center;
  }

  #<?php echo $id; ?> .content {
    text-align: center;
  }







  @media (max-width: 767px) {
    
  }

</style>

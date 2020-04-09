<?php
/**
 * Block Name: Little call to action
 *
 * This is the template that displays the "Little call to action" block.
 */

// create id attribute for specific styling
$id = 'little_cta-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="cta" style="background-color: <?php the_field('little_cta_bg_color') ?>; color: <?php the_field('little_cta_text_color') ?>;">
          <?php if(get_field('little_cta_heading')) { ?>
            <h2 class="green-text" style="color: <?php the_field('little_cta_text_color') ?>;"><?php echo the_field('little_cta_heading'); ?></h2>
          <?php } ?>
          <?php if(get_field('little_cta_subheading')) { ?>
            <h3 class="blue-text" style="color: <?php the_field('little_cta_text_color') ?>;"><?php echo the_field('little_cta_subheading'); ?></h3>
          <?php } ?>
          <?php if(get_field('little_cta_button')) { ?>
            <a href="<?php echo the_field('little_cta_href'); ?>">
              <button class="btn btn-success rounded-corners" type="button"><?php echo the_field('little_cta_button'); ?></button>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>



<style type="text/css">
  #<?php echo $id; ?> {
    padding: 1.5rem 0;
  }

	#<?php echo $id; ?> .cta {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    position: relative;
    font-size: 0.75rem;
    text-align: center;
    border-radius: 5px;
	}

  #<?php echo $id; ?> h2,
  #<?php echo $id; ?> h3 {
    text-align: center;
  }

  #<?php echo $id; ?> button {
    margin: 1rem 0 0 0;
    font-size: 0.875rem;
  }

</style>

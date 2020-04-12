<?php
/**
 * Block Name: fullwidth-call-to-action
 *
 * This is the template that displays the "fullwidth-call-to-action" block.
 */

// create id attribute for specific styling
$id = 'fullwidth-call-to-action-' . $block['id'];

?>

<section id="<?php echo $id; ?>" style="background-color: <?php the_field('fullwidth_cta_bg_color') ?>; color: <?php the_field('fullwidth_cta_text_color') ?>;">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="cta">
          <?php if(get_field('fullwidth_cta_heading')) { ?>
            <h1 class="green-text" style="color: <?php the_field('fullwidth_cta_text_color') ?>;"><?php echo the_field('fullwidth_cta_heading'); ?></h1>
          <?php } ?>
          <?php if(get_field('fullwidth_cta_subheading')) { ?>
            <h2 class="blue-text" style="color: <?php the_field('fullwidth_cta_text_color') ?>;"><?php echo the_field('fullwidth_cta_subheading'); ?></h2>
          <?php } ?>
          <?php if(get_field('fullwidth_cta_button')) { ?>
            <a href="<?php echo the_field('fullwidth_cta_href'); ?>">
              <button class="btn btn-success rounded-corners" type="button"><?php echo the_field('fullwidth_cta_button'); ?></button>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>



<style type="text/css">
  #<?php echo $id; ?> {
    margin: 0 auto;
  }

	#<?php echo $id; ?> .cta {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    position: relative;
    font-size: 0.75rem;
    text-align: center;
    border-radius: 5px;
	}

  #<?php echo $id; ?> h1,
  #<?php echo $id; ?> h2 {
    text-align: center;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'camptonbook', sans-serif;
    text-transform: none;
  }

  #<?php echo $id; ?> button {
    margin: 1rem 0 0 0;
    font-size: 0.875rem;
  }

</style>

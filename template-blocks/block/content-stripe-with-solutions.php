<?php
/**
 * Block Name: stripe-with-solutions
 *
 * This is the template that displays the "stripe-with-solutions" block.
 */

// get image field (array)
// $rpf_svg_image = get_field('rpf_svg_image');

// create id attribute for specific styling
$id = 'stripewithsolutions-' . $block['id'];

?>

<section id="<?php echo $id; ?>">

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><?php echo get_field('sws_heading'); ?></h2>
      </div>
    </div>
    <div class="row after-dotted-border">
      <div class="col-6">
        <div class="left content">
          <?php echo get_field('sws_top_left_content'); ?>
        </div>
      </div>
      <div class="col-6">
        <div class="right content">
          <?php echo get_field('sws_top_right_content'); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="bottom content">
          <?php echo get_field('sws_top_bottom_content'); ?>
        </div>
      </div>
    </div>
  </div>

</section>



<style type="text/css">

	#<?php echo $id; ?> {
    padding: 2rem 0;
    background-color: #EFEFEF;
	}

  #<?php echo $id; ?> h2 {
    margin: 0 0 3rem 0;
  }

  #<?php echo $id; ?> h3 {
    font-size: 1.125rem;
    margin-bottom: 1rem;
  }

  #<?php echo $id; ?> .after-dotted-border {
    position: relative;
    margin-bottom: 3rem;
  }

  #<?php echo $id; ?> .after-dotted-border:after {
    content: '';
    position: absolute;
    bottom: -1.5rem;
    left: 0;
    right: 0;
    border-bottom: 1px dotted #B3B3B3;
  }

</style>

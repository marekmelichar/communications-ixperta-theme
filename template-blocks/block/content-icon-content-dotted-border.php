<?php
/**
 * Block Name: Icon content dotted border
 *
 * This is the template that displays the "Icon content dotted border" block.
 */

// get image field (array)
$icdb_svg_image = get_field('icdb_svg_image');

// create id attribute for specific styling
$id = 'iconcontentdottedborder-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="row">
    <div class="col-1">
      <img src="<?php echo $icdb_svg_image['url'] ?>" alt="<?php echo $icdb_svg_image['alt'] ?>">
    </div>
    <div class="col-11">
      <div class="content">
        <?php echo the_field('icdb_content') ?>
      </div>
    </div>
  </div>
</section>



<style type="text/css">

  #<?php echo $id; ?> {
    padding: 1.5rem 0;
  }

	#<?php echo $id; ?> img {
    width: 100%;
	}

	#<?php echo $id; ?> .content {
    font-size: 0.75rem;
    border-bottom: 1px dotted #B3B3B3;
	}

</style>

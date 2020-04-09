<?php
/**
 * Block Name: Two gray green columns
 *
 * This is the template that displays the "Two gray green columns" block.
 */


// create id attribute for specific styling
$id = 'twograygreencolumns-' . $block['id'];

?>

<section id="<?php echo $id; ?>" class="gray_green_cols">
  <div class="row no-gutters">
    <div class="col gray-column">
      <?php echo the_field('tggc_gray_col'); ?>
    </div>
    <div class="col green-column">
      <?php echo the_field('tggc_green_col'); ?>
    </div>
  </div>
</section>



<style type="text/css">

  #<?php echo $id; ?> {
    margin-bottom: 2px;
    font-size: 0.75rem;
  }

	#<?php echo $id; ?> .gray-column {
    background-color: #EFEFEF;
    margin-right: 2px;
    padding: 1rem;
	}

	#<?php echo $id; ?> .green-column {
    background-color: #00B388;
    margin-left: 2px;
    padding: 1rem;
    color: #fff;
	}

  #<?php echo $id; ?> ul {
    margin-bottom: 0;
  }


</style>

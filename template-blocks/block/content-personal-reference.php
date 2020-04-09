<?php
/**
 * Block Name: personal-reference
 *
 * This is the template that displays the "personal-reference" block.
 */

// get image field (array)
$persrf_image = get_field('persrf_image');

// create id attribute for specific styling
$id = 'personalreference-' . $block['id'];

?>

<section id="<?php echo $id; ?>">

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><?php echo get_field('persrf_heading'); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">

        <?php if (strpos($persrf_image['url'], '.svg') == true) { ?>
          <div class="svg">
            <?php echo file_get_contents($persrf_image['url']); ?>
          </div>
        <?php } else { ?>
          <div class="image">
            <img src="<?php echo $persrf_image['url'] ?>" alt="<?php echo $persrf_image['alt'] ?>">
          </div>
        <?php } ?>

      </div>
      <div class="col-md-10">
        <div class="content">
          <?php echo get_field('persrf_content'); ?>
        </div>
      </div>
    </div>
  </div>

</section>



<style type="text/css">

	#<?php echo $id; ?> {
    padding: 1.5rem 0;
    background-color: #00B388;
    color: #fff;
	}

  #<?php echo $id; ?> h2 {
    color: #fff;
    margin-bottom: 1.5rem
  }

  #<?php echo $id; ?> h2:after {
    background-color: #001A70;
  }

  #<?php echo $id; ?> h3 {
    color: #001A70;
    font-family: 'camptonbold', sans-serif;
  }

  #<?php echo $id; ?> img {
    border-radius: 50%;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.3);
  }

  #<?php echo $id; ?> .content {
    padding: 1.5rem 0 0 0;
    font-size: 0.75rem;
  }

  @media (max-width: 767px) {

    #<?php echo $id; ?> .image {
      width: 30%;
      margin: 1rem auto 0 auto;
    }
  }

</style>

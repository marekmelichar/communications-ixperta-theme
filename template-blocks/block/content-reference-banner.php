<?php
/**
 * Block Name: reference-banner
 *
 * This is the template that displays the "reference-banner" block.
 */

// get image field (array)
$ref_banner_image = get_field('ref_banner_image');

// create id attribute for specific styling
$id = 'referencebanner-' . $block['id'];

?>

<section id="<?php echo $id; ?>">

  <div class="container">
    <div class="row">
      <div class="col-md image_or_svg">
        <?php if (strpos($ref_banner_image['url'], '.svg') == true) { ?>
          <?php echo file_get_contents($ref_banner_image['url']); ?>
        <?php } else { ?>
          <img src="<?php echo $ref_banner_image['url'] ?>" alt="<?php echo $ref_banner_image['alt'] ?>">
        <?php } ?>
      </div>
      <div class="col-md content">
        <h1><?php echo get_field('ref_banner_heading'); ?></h1>
        <div class="desc">
          <?php echo get_field('ref_banner_content'); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>');
          }
        ?>
        <div class="bottom-line"></div>
      </div>
    </div>
  </div>

</section>



<style type="text/css">

	#<?php echo $id; ?> {
    margin: 0;
	}

  #<?php echo $id; ?> .image_or_svg {
    padding: 6rem 2rem;
    background-color: #EFEFEF;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #<?php echo $id; ?> svg {
    width: 80%;
    height: auto;
  }

  #<?php echo $id; ?> .content {
    padding: 2rem;
    background-color: #00B388;
    color: #fff;
    text-align: left;
  }

  #<?php echo $id; ?> h1 {
    font-size: 2.25rem;
    text-align: left;
  }

  #<?php echo $id; ?> .desc {
    font-size: 1.25rem;
    text-align: left;
  }

  #<?php echo $id; ?> h1:after {
    background-color: #fff;
    left: 0;
    transform: none;
  }

  #<?php echo $id; ?> #breadcrumbs {
    margin: 1rem 0 1rem -1rem;
    color: #707070;
	}

	#<?php echo $id; ?> #breadcrumbs svg {
    width: 1.5rem;
    margin-right: 0.25rem;
	}

	#<?php echo $id; ?> #breadcrumbs a {
    color: #707070;
	}

  #<?php echo $id; ?> .bottom-line {
    width: 100%;
    background-color: #707070;
    height: 1px;
    position: absolute;
    left: 0;
    right: 0;
  }



  @media (max-width: 767px) {

    #<?php echo $id; ?> .svg {
      width: 60%;
      margin: 1rem auto;
    }

    #<?php echo $id; ?> #breadcrumbs {
      margin: 1rem 0;
    }
  }

</style>

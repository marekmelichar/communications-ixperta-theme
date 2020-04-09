<?php
/**
 * Block Name: stripe-with-tags
 *
 * This is the template that displays the "stripe-with-tags" block.
 */

// get image field (array)
$rpf_svg_image = get_field('rpf_svg_image');
// var_dump($rpf_svg_image);

// create id attribute for specific styling
$id = 'stripewithtags-' . $block['id'];

?>

<section id="<?php echo $id; ?>">

  <div class="container">
    <div class="row">
      <div class="col-md-3">

        <?php if (strpos($rpf_svg_image['url'], '.svg') == true) { ?>
          <div class="svg">
            <?php echo file_get_contents($rpf_svg_image['url']); ?>
          </div>
        <?php } else { ?>
          <div class="image">
            <img src="<?php echo $rpf_svg_image['url'] ?>" alt="<?php echo $rpf_svg_image['alt'] ?>">
          </div>
        <?php } ?>

      </div>
      <div class="col-md-9">
        <div class="content">
          <?php echo get_field('rpf_content'); ?>
        </div>

        <?php if(get_field('rpf_show_tags')) { ?>
          <div class="tags">
            <?php the_tags('', '', '') ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

</section>



<style type="text/css">

	#<?php echo $id; ?> {
    margin: 2rem 0;
	}

  #<?php echo $id; ?> .svg {
    /* width: 33%; */
  }

  #<?php echo $id; ?> svg {
    width: 100%;
    height: auto;
  }

  #<?php echo $id; ?> .tags {
    text-align: left;
    margin-top: 1.5rem;
  }

  #<?php echo $id; ?> .tags a {
    background-color: #DFDFDF;
    border-radius: 25px;
    padding: 0.5rem 2rem 0.5rem 3rem;
    margin: 0 0.5rem;
    position: relative;
    color: #001A70;
  }

  #<?php echo $id; ?> .tags a:before {
    content: '#';
    position: absolute;
    left: 2rem;
  }

  @media (max-width: 767px) {

    #<?php echo $id; ?> .tags a {
      display: inline-block;
      padding: 0.5rem 1rem 0.5rem 1.5rem;
      margin: 0.25rem 0.5rem;
    }

    #<?php echo $id; ?> .tags a:before {
      left: 0.75rem;
    }

    #<?php echo $id; ?> .svg {
      width: 60%;
      margin: 1rem auto;
    }
  }

</style>

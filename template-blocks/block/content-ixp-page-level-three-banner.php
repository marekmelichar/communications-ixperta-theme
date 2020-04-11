<?php
/**
 * Block Name: ixp-page-level-three-banner
 *
 * This is the template that displays the "page-level-three-banner" block.
 */

// get image field (array)
$image = get_field('ixp_level_three_image');
$icon = get_field('ixp_level_three_icon');
$class = get_field('ixp_level_three_custom_class');

// create id attribute for specific styling
$id = 'pagelevel_threebanner-' . $block['id'];

?>

<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">

  <div class="container">
    <div class="row no-gutters">
    <?php if($image) { ?>
        <?php if (strpos($image['url'], '.svg') == true) { ?>
          <div class="col-md image_or_svg svg">
            <?php echo file_get_contents($image['url']); ?>
          </div>
        <?php } else { ?>
          <div class="col-md image_or_svg img" style="background-image: url(<?php echo $image['url']; ?>);"></div>
        <?php } ?>
      <?php } ?>
      <div class="col-md content">
        <div class="top" style="background-color: <?php echo get_field('ixp_level_three_top_bg_color') ? the_field('ixp_level_three_top_bg_color') : "" ?>">
          <?php if($icon) { ?>
            <div class="icon">
              <?php echo file_get_contents($icon['url']); ?>
            </div>
          <?php } ?>
          <h1><?php echo get_field('ixp_level_three_page_level_three_heading'); ?></h1>
          <div class="desc">
            <?php echo get_field('ixp_level_three_page_level_three_desc'); ?>
          </div>
        </div>
        <?php if(get_field('ixp_level_three_page_level_three_bottom_content')) { ?>
          <div class="bottom">
            <?php echo get_field('ixp_level_three_page_level_three_bottom_content'); ?>
          </div>
        <?php } ?>
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

  #<?php echo $id; ?> .image_or_svg.img {
    background-size: cover;
    background-position: center;
  }

  #<?php echo $id; ?> .image_or_svg.svg {
    background-color: #EFEFEF;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #<?php echo $id; ?> .image_or_svg.svg svg {
    width: 50%;
  }

  #<?php echo $id; ?> svg {
    width: 80%;
    height: auto;
  }

  #<?php echo $id; ?> .icon {
    width: 60px;
    position: absolute;
    top: 1.5rem;
    right: 1rem;
  }

  #<?php echo $id; ?> .top {
    padding: 1.5rem 4rem 1.5rem 2rem;
    background-color: #001A70;
  }

  #<?php echo $id; ?> .bottom {
    padding: 1.5rem 4rem 1.5rem 2rem;
    color: #001A70;
  }

  #<?php echo $id; ?> .content {
    background-color: #EFEFEF;
    color: #fff;
    text-align: left;
  }

  #<?php echo $id; ?> h1 {
    font-size: 2.25rem;
    text-align: left;
    text-transform: none;
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
    margin: 1rem 0;
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
    background-color: #707070;
    height: 1px;
    position: absolute;
    left: 15px;
    right: 15px;
  }

  #<?php echo $id; ?>.contact-page .content {
    background-color: #fff !important;
  }

  #<?php echo $id; ?>.contact-page .bottom p {
    margin: 0;
  }

	#<?php echo $id; ?>.contact-page .bottom {
    padding: 0;
  }
  
  #<?php echo $id; ?>.contact-page .bottom img {
    margin: 0;
    width: 100%;
  }



  @media (max-width: 767px) {

    #<?php echo $id; ?> .image_or_svg {
      height: 200px;
    }

    #<?php echo $id; ?> .svg {
      width: 60%;
      margin: 1rem auto;
    }

    #<?php echo $id; ?> #breadcrumbs {
      margin: 1rem 0;
    }
  }

</style>

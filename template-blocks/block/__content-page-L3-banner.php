<?php
/**
 * Block Name: page-L3-banner
 *
 * This is the template that displays the "page-L3-banner" block.
 */

// get image field (array)
$image = get_field('image');
$icon = get_field('icon');

// create id attribute for specific styling
$id = 'pageL3banner-' . $block['id'];

?>

<section id="<?php echo $id; ?>">

  <div class="container">
    <div class="row no-gutters">
      <div class="col-md image_or_svg" style="background-image: url(<?php echo $image['url']; ?>);"></div>
      <div class="col-md content">
        <div class="top" style="background-color: <?php echo get_field('top_bg_color') ? the_field('top_bg_color') : "" ?>">
          <?php if($icon) { ?>
            <div class="icon">
              <?php echo file_get_contents($icon['url']); ?>
            </div>
          <?php } ?>
          <h1><?php echo get_field('page_L3_heading'); ?></h1>
          <div class="desc">
            <?php echo get_field('page_L3_desc'); ?>
          </div>
        </div>
        <?php if(get_field('page_L3_bottom_content')) { ?>
          <div class="bottom">
            <?php echo get_field('page_L3_bottom_content'); ?>
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

  #<?php echo $id; ?> .image_or_svg {
    background-size: cover;
    background-position: center;
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

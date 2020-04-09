<?php
/**
 * Block Name: References
 *
 *
 */

// create id attribute for specific styling
$id = 'references-' . $block['id'];
// $image = get_field('banner_background_image');

?>

<article id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1><?php echo the_field('references_heading'); ?></h1>
      </div>
    </div>

    <!-- <div class="prevArrow"></div> -->
    <div class="prevArrow">
      <i class="fas fa-chevron-left"></i>
    </div>

    <div class="row references__logos">

      <?php if( have_rows('references_logo_carousel') ): ?>
        <?php while( have_rows('references_logo_carousel') ): the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <?php //$heading = get_sub_field('heading'); ?>
          <?php //$content = get_sub_field('content'); ?>

          <div class="col">
            <?php if($image): ?>
              <div class="svg img">
                <?php if (strpos($image['url'], '.svg') == true) { ?>
                  <?php echo file_get_contents($image['url']); ?>
                <?php } else { ?>
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                <?php } ?>
              </div>
            <?php endif; ?>
            <!-- <div class="heading">
              <h3 class="head"><?php //echo $heading; ?></h3>
            </div> -->
            <!-- <div class="content">
              <?php //echo $content; ?>
            </div> -->
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>

    <!-- <div class="nextArrow"></div> -->
    <div class="nextArrow">
      <i class="fas fa-chevron-right"></i>
    </div>

  </div>
</article>






<style type="text/css">
  #<?php echo $id; ?> {
  }


  #<?php echo $id; ?> {
    background: #001A70;
    color: #fff;
    padding: 1.5rem 0;
  }

  #<?php echo $id; ?> .a {
    fill: #fff;
  }

  #<?php echo $id; ?> .container {
    position: relative;
  }

  #<?php echo $id; ?> h1 {
    color: #fff;
  }

  #<?php echo $id; ?> h1:after {
    background-color: #fff;
  }

  #<?php echo $id; ?> .references__logos .svg {
    padding-top: 18px;
    width: 200px;
    height: 200px;
    margin: 0 auto;
    text-align: center;

  }

  #<?php echo $id; ?> .references__logos .svg svg {
    width: 160px;
    height: 160px;
    fill: #fff;
  }

  #<?php echo $id; ?> .references__logos .heading {
    text-align: center;
    margin-top: 1rem;
  }

  #<?php echo $id; ?> .references__logos .heading .head {
    font-family: 'camptonbold', sans-serif;
    font-weight: normal;
  }

  #<?php echo $id; ?> .references__logos .content {
    text-align: center;
    font-size: 1rem;
  }

  #<?php echo $id; ?> .prevArrow {
    position: absolute;
    top: 120px;
    left: -50px;
    cursor: pointer;
    font-size: 3rem;
  }

  #<?php echo $id; ?> .nextArrow {
    position: absolute;
    top: 120px;
    right: -50px;
    cursor: pointer;
    font-size: 3rem;
  }







  @media (max-width: 1024px) {
    #<?php echo $id; ?> .prevArrow {
      left: -30px;
    }

    #<?php echo $id; ?> .nextArrow {
      right: -30px;
    }
  }

  @media (min-width: 767px) and (max-width: 768px) {
    #<?php echo $id; ?> .prevArrow {
      left: 0;
    }

    #<?php echo $id; ?> .nextArrow {
      right: 0;
    }
  }

  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      
    }

    #<?php echo $id; ?> .prevArrow {
      left: 0;
    }

    #<?php echo $id; ?> .nextArrow {
      right: 0;
    }
  }

</style>

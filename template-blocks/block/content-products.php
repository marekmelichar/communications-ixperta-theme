<?php
/**
 * Block Name: Products
 *
 *
 */

// create id attribute for specific styling
$id = 'products-' . $block['id'];
// $image = get_field('banner_background_image');

?>

<article id="<?php echo $id; ?>" class="<?php the_field('bg_color_class_2'); ?>" style="background: <?php the_field('bg_color_2') ?>;">
<div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('bg_color_heading_2'); ?></h1>
      </div>
    </div>
  </div>

  <?php if( have_rows('bg_color_stripe_repeater_2') ): ?>
    <?php $i = 1 ?>

    <div class="container bg_color_stripe_repeater">
      <div class="row justify-content-center products_wrapper">

      <?php while( have_rows('bg_color_stripe_repeater_2') ): the_row();

        // vars
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="col-md<?php echo count(get_field('bg_color_stripe_repeater_2')) == 1 ? "" : "-4" ?> product text-center">
          <?php if($icon): ?>
            <?php if($href): ?><a class="anchor-no-decoration" href="<?php echo $href; ?>"><?php endif; ?>
              <div class="svg img">
                <?php if (strpos($icon['url'], '.svg') == true) { ?>
                  <?php echo file_get_contents($icon['url']); ?>
                <?php } else { ?>
                  <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">
                <?php } ?>
              </div>
            <?php if($href): ?></a><?php endif; ?>
          <?php endif; ?>

          <?php if($heading): ?>
            <div class="heading">
              <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                <h3 class="head"><?php echo $heading; ?></h3>
              <?php if($href): ?></a><?php endif; ?>
            </div>
          <?php endif; ?>

          <?php if($content): ?>
            <div class="content">
              <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                <?php echo $content; ?>
              <?php if($href): ?></a><?php endif; ?>
            </div>
          <?php endif; ?>
          
          <?php if(!$href_text && $href): ?>
            <a class="arrow-green-circle" href="<?php echo $href; ?>">
              <i class="fas fa-chevron-right"></i>
            </a>
          <?php elseif(!$href_text && !$href): ?>
          <?php else: ?>
            <a href="<?php echo $href; ?>" class="__btn-more-info">
              <?php echo $href_text; ?>
            </a>
          <?php endif; ?>
        </div>

        <?php if ($i % 3 == 0 && count(get_field('bg_color_stripe_repeater_2')) > 4 ) { ?>
          </div>
          <div class="row justify-content-center">
        <?php } ?>

        <?php $i++; ?>
      <?php endwhile; ?>
      
    </div>
  </div>

  <?php endif; ?>


</article>






<style type="text/css">

  #<?php echo $id; ?> {
    padding: 1.5rem 0 3rem 0;
    position: relative;
  }

  #<?php echo $id; ?> .product {
    margin-top: 1.5rem;
  }

  #<?php echo $id; ?> h1 {
    margin: 0.75rem 0 1.25rem 0;
    /* margin: 0.5rem 0 2rem 0; */
  }

  #<?php echo $id; ?> .heading {
    margin-top: 1.25rem;
    margin-bottom: 1rem;
  }

  #<?php echo $id; ?> h2 {
    text-align: center;
  }

  #<?php echo $id; ?> .h2:after,
  #<?php echo $id; ?> h2:after {
    left: 50%;
    transform: translateX(-50%);
  }

  #<?php echo $id; ?> h3 {
    font-family: 'camptonsemibold', sans-serif;
    font-size: 1.125rem;
  }

  #<?php echo $id; ?> .svg svg {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
  }

  #<?php echo $id; ?> .content {
    font-size: 0.875rem;
  }

  #<?php echo $id; ?> .content a {
    color: #001A70;
  }

  #<?php echo $id; ?> .arrow-green-circle {
    margin: 1rem auto;
  }

  #<?php echo $id; ?> .container {
    position: relative;
  }

  #<?php echo $id; ?> .prevArrow {
    position: absolute;
    top: 50px;
    left: -50px;
    cursor: pointer;
    font-size: 3rem;
  }

  #<?php echo $id; ?> .nextArrow {
    position: absolute;
    top: 50px;
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
    #<?php echo $id; ?> .prevArrow {
      left: 0;
    }

    #<?php echo $id; ?> .nextArrow {
      right: 0;
    }
  }

</style>






<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) { 
    (function ($) {
      $(window).on('load', function () {
        var id = <?php echo json_encode($id); ?>;
        equalheight($(`#${id} .row .heading`));
      })
    })(jQuery, window);
  })
</script>
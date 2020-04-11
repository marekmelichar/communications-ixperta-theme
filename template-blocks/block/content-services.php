<?php
/**
 * Block Name: Services
 *
 *
 */

// create id attribute for specific styling
$id = 'services-' . $block['id'];
$image = get_field('banner_background_image');
$tilescount = get_field('services_how_many_tiles_in_row');
?>

<article id="<?php echo $id; ?>" class="<?php the_field('bg_color_class'); ?>" style="background: <?php the_field('bg_color_services') ?>;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('bg_color_heading'); ?></h1>
      </div>
    </div>
  </div>

  <?php if( have_rows('bg_color_stripe_repeater') ): ?>
    <?php $i = 1; ?>

    <div class="container links bg_color_stripe_repeater">
      <div class="row justify-content-center">



      <?php while( have_rows('bg_color_stripe_repeater') ): the_row();

        // vars
        $show_bg_color = get_sub_field('show_bg_color');
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <!-- <div class="col-md-4 text-center"> -->
        <div class="col-md<?php echo count(get_field('bg_color_stripe_repeater')) == 1 ? "" : "-" ?><?php echo 12 / $tilescount ?> text-center">
          <div class="row no-gutters box <?php echo $show_bg_color ? 'show_bg_color' : '' ?>">
            <div class="col">
              <?php if($icon): ?>
                <div class="svg img">
                  <?php if (strpos($icon['url'], '.svg') == true) { ?>
                    <?php echo file_get_contents($icon['url']); ?>
                  <?php } else { ?>
                    <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">
                  <?php } ?>
                </div>
              <?php endif; ?>

              <?php if($heading): ?>
                <div class="heading">
                  <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                    <h3 class="head"><?php echo $heading; ?></h3>
                  <?php if($href): ?></a><?php endif; ?>
                </div>
              <?php endif; ?>
              
              <div class="content">
                <?php echo $content; ?>
              </div>
              <?php if(!$href_text && $href): ?>
                <a class="arrow-green-circle" href="<?php echo $href; ?>">
                  <i class="fas fa-chevron-right"></i>
                </a>
              <?php elseif(!$href_text && !$href): ?>
              <?php else: ?>
                <a href="<?php echo $href; ?>">
                  <?php echo $href_text; ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <?php if ($tilescount && $i % $tilescount == 0 && count(get_field('bg_color_stripe_repeater')) > $tilescount ) { ?>
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
    padding: 2rem 0;
  }

  #<?php echo $id; ?> h1 {
    margin: 0.5rem 0 2rem 0;
  }

  #<?php echo $id; ?> h3 {
    font-family: 'camptonsemibold', sans-serif;
    font-size: 1.125rem;
    color: #00B388;
  }

  #<?php echo $id; ?> .box {
    margin-bottom: 1.5rem;
    padding: 1rem;
    border-radius: 5px;
  }

  #<?php echo $id; ?> .box.show_bg_color {
    background-color: #EFEFEF;
  }

  #<?php echo $id; ?>.dark {
    text-align: center;
    color: #fff;
  }

  #<?php echo $id; ?>.light h2 {
    text-align: center;
    color: #001A70;
  }

  #<?php echo $id; ?> .h2:after,
  #<?php echo $id; ?> h2:after {
      content: '';
      display: block;
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background-color: #00B388;
  }

  #<?php echo $id; ?>.dark .bg_color_stripe_repeater {
    color: #fff;
    padding: 1.5rem 0;
  }

  #<?php echo $id; ?>.dark .bg_color_stripe_repeater .heading a {
    color: #fff;
  }

  #<?php echo $id; ?>.light .bg_color_stripe_repeater {
    padding: 0.75rem 0 0 0;
  }

  #<?php echo $id; ?> .bg_color_stripe_repeater .svg {
    width: 70px;
    margin: 1rem auto 1.5rem auto;
  }

  #<?php echo $id; ?> .bg_color_stripe_repeater .heading {
    margin: 0.75rem auto;
  }

  #<?php echo $id; ?> .bg_color_stripe_repeater .heading .head {
    font-family: 'camptonsemibold', sans-serif;
    font-weight: normal;
    text-align: center;
  }

  #<?php echo $id; ?> .bg_color_stripe_repeater .the-little-plus {
    width: 40px;
    height: 40px;
    margin: 0 auto;
  }

  #<?php echo $id; ?> .bg_color_stripe_repeater.links a {
    background-color: #DFDFDF;
    border-radius: 25px;
    padding: 0.5rem 1rem;
    color: #001A70;
    font-size: 0.875rem;
  }

  #<?php echo $id; ?> .bg_color_stripe_repeater .content p,
  #<?php echo $id; ?> .bg_color_stripe_repeater .content a {
    margin-top: 1rem;
    margin-bottom: 1.75rem;
  }








  @media (min-width: 767px) and (max-width: 768px) {
    #<?php echo $id; ?> .bg_color_stripe_repeater .svg {
      width: 40px;
      margin: 0 auto;
    }

    #<?php echo $id; ?> .bg_color_stripe_repeater .heading {
      margin: 0 auto;
    }
  }

  @media (max-width: 767px) {

    #<?php echo $id; ?> .bg_color_stripe_repeater .svg {
      margin: 1rem auto 0.5rem auto;
    }

    #<?php echo $id; ?> .bg_color_stripe_repeater .heading {
      margin: 0 auto;
    }

    #<?php echo $id; ?> .bg_color_stripe_repeater .heading .head {
      text-align: center;
    }

    #<?php echo $id; ?> .bg_color_stripe_repeater .content p {
      text-align: center !important;
    }

    #<?php echo $id; ?> .bg_color_stripe_repeater .col-md-3 {
      margin-top: 1.5rem;
    }
  }

</style>






<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) { 
    (function ($) {
      $(window).on('load', function () {
        var id = <?php echo json_encode($id); ?>;
        equalheight($(`#${id} .content`));
      })
    })(jQuery, window);
  })
</script>
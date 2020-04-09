<?php
/**
 * Block Name: Services
 *
 *
 */

// create id attribute for specific styling
$id = 'services-' . $block['id'];
$image = get_field('banner_background_image');

?>

<article id="services" class="<?php the_field('bg_color_class'); ?>" style="background: <?php the_field('bg_color_services') ?>;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('bg_color_heading'); ?></h1>
      </div>
    </div>
  </div>

  <?php if( have_rows('bg_color_stripe_repeater') ): ?>

    <div class="container links bg_color_stripe_repeater">
      <div class="row">



      <?php while( have_rows('bg_color_stripe_repeater') ): the_row();

        // vars
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="col-md text-center">
          <div class="row no-gutters">
            <div class="col">
              <?php if($heading): ?>
                <div class="heading">
                  <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                    <h3 class="head"><?php echo $heading; ?></h3>
                  <?php if($href): ?></a><?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if($icon): ?>
                <div class="svg img">
                  <?php if (strpos($icon['url'], '.svg') == true) { ?>
                    <?php echo file_get_contents($icon['url']); ?>
                  <?php } else { ?>
                    <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">
                  <?php } ?>
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
                <a href="<?php echo $href; ?>" class="__btn-more-info">
                  <?php echo $href_text; ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>



      <?php endwhile; ?>

    </div>
  </div>

  <?php endif; ?>


</article>






<style type="text/css">
  #<?php echo $id; ?> {
  }


  <?php echo $id; ?> {
    padding: 1.5rem 0;
  }

  <?php echo $id; ?>.dark {
    text-align: center;
    color: #fff;
  }

  <?php echo $id; ?>.light h2 {
    text-align: center;
    color: #001A70;
  }

  <?php echo $id; ?> .h2:after,
  <?php echo $id; ?> h2:after {
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

  <?php echo $id; ?>.dark .bg_color_stripe_repeater {
    color: #fff;
    padding: 1.5rem 0;
  }

  <?php echo $id; ?>.dark .bg_color_stripe_repeater .heading a {
    color: #fff;
  }

  <?php echo $id; ?>.light .bg_color_stripe_repeater {
    padding: 0.75rem 0 0 0;
  }

  <?php echo $id; ?> .bg_color_stripe_repeater .svg {
    width: 70px;
    margin: 1rem auto 1.5rem auto;
  }

  <?php echo $id; ?> .bg_color_stripe_repeater .heading {
    margin: 0.75rem auto;
  }

  <?php echo $id; ?> .bg_color_stripe_repeater .heading .head {
    font-family: 'camptonsemibold', sans-serif;
    font-weight: normal;
    text-align: center;
  }

  <?php echo $id; ?> .bg_color_stripe_repeater .the-little-plus {
    width: 40px;
    height: 40px;
    margin: 0 auto;
  }

  <?php echo $id; ?> .bg_color_stripe_repeater.links a {
    background-color: #DFDFDF;
    border-radius: 25px;
    padding: 0.5rem 1rem;
    color: #001A70;
    font-size: 0.875rem;
  }

  <?php echo $id; ?> .bg_color_stripe_repeater .content p,
  <?php echo $id; ?> .bg_color_stripe_repeater .content a {
    margin-top: 1rem;
    margin-bottom: 1.75rem;
  }








  @media (min-width: 767px) and (max-width: 768px) {
    <?php echo $id; ?> .bg_color_stripe_repeater .svg {
      width: 40px;
      margin: 0 auto;
    }

    <?php echo $id; ?> .bg_color_stripe_repeater .heading {
      margin: 0 auto;
    }

    <?php echo $id; ?> .bg_color_stripe_repeater.links a {
      background-color: #DFDFDF;
      border-radius: 25px;
      padding: 0.5rem 1rem;
      color: #001A70;
      font-size: 0.5rem;
    }
  }

  @media (max-width: 767px) {

    <?php echo $id; ?> .bg_color_stripe_repeater .svg {
      margin: 1rem auto 0.5rem auto;
    }

    <?php echo $id; ?> .bg_color_stripe_repeater .heading {
      margin: 0 auto;
    }

    <?php echo $id; ?> .bg_color_stripe_repeater .heading .head {
      text-align: center;
    }

    <?php echo $id; ?> .bg_color_stripe_repeater .content p {
      text-align: center !important;
    }

    <?php echo $id; ?> .bg_color_stripe_repeater .col-md-3 {
      margin-top: 1.5rem;
    }

    <?php echo $id; ?> .bg_color_stripe_repeater.links {
      background-color: #DFDFDF;
      border-radius: 25px;
      padding: 0.5rem 1rem;
      color: #001A70;
      font-size: 0.75rem;
    }
  }

</style>

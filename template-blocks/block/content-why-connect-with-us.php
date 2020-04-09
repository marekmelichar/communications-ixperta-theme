<?php
/**
 * Block Name: why-connect-with-us
 *
 *
 */

// create id attribute for specific styling
$id = 'whyconnectwithus-' . $block['id'];

?>

<article id="why_connect_with_us" class="<?php the_field('wcwu_bg_color_class'); ?>" style="background: <?php the_field('wcwu_bg_color') ?>;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('wcwu_bg_color_heading'); ?></h1>
      </div>
    </div>
  </div>

  <?php if( have_rows('wcwu_bg_color_stripe_repeater') ): ?>

    <div class="container links bg_color_stripe_repeater">
      <div class="row">
        <!-- <div class="col"> -->


      <?php while( have_rows('wcwu_bg_color_stripe_repeater') ): the_row();

        // vars
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="col">
          <div class="row">
            <div class="col">
            <?php if($heading): ?>
                <div class="heading">
                  <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                    <h3 class="head"><?php echo $heading; ?></h3>
                  <?php if($href): ?></a><?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if($content): ?>
                <div class="content">
                  <?php echo $content; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>




      <?php endwhile; ?>

      <!-- </div> -->
    </div>
  </div>

  <?php endif; ?>


</article>






<style type="text/css">
  #<?php echo $id; ?> {
  }


  #services,
  #why_connect_with_us {
    padding: 1.5rem 0;
  }

  #services.dark,
  #why_connect_with_us.dark h2 {
    text-align: center;
    color: #fff;
  }

  #services.light h2,
  #why_connect_with_us.light h2 {
    text-align: center;
    color: #001A70;
  }

  #services .h2:after,
  #services h2:after,
  #why_connect_with_us .h2:after,
  #why_connect_with_us h2:after {
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

  #why_connect_with_us .heading {
    padding-top: 1.5rem;
  }

  #services.dark .bg_color_stripe_repeater,
  #why_connect_with_us.dark .bg_color_stripe_repeater {
    color: #fff;
    padding: 1.5rem 0;
  }

  #services.dark .bg_color_stripe_repeater .heading a,
  #why_connect_with_us.dark .bg_color_stripe_repeater .heading a {
    color: #fff;
  }

  #services.light .bg_color_stripe_repeater {
    padding: 0.75rem 0 0 0;
  }

  #why_connect_with_us.light .bg_color_stripe_repeater {
    color: #001A70;
  }

  #services .bg_color_stripe_repeater .svg,
  #why_connect_with_us .bg_color_stripe_repeater .svg {
    width: 70px;
    margin: 1rem auto 1.5rem auto;
  }

  #services .bg_color_stripe_repeater .heading {
    margin: 0.75rem auto;
  }

  #services .bg_color_stripe_repeater .heading .head,
  #why_connect_with_us .bg_color_stripe_repeater .heading .head {
    font-family: 'camptonsemibold', sans-serif;
    font-weight: normal;
    text-align: center;
  }

  #services .bg_color_stripe_repeater .the-little-plus,
  #why_connect_with_us .bg_color_stripe_repeater .the-little-plus {
    width: 40px;
    height: 40px;
    margin: 0 auto;
  }

  #services .bg_color_stripe_repeater.links a,
  #why_connect_with_us .bg_color_stripe_repeater.links a {
    background-color: #DFDFDF;
    border-radius: 25px;
    padding: 0.5rem 1rem;
    color: #001A70;
    font-size: 0.875rem;
  }

  #why_connect_with_us .bg_color_stripe_repeater .content {
    margin-top: 1rem;
    font-size: 0.875rem;
    text-align: center;
  }

  #services .bg_color_stripe_repeater .content p,
  #services .bg_color_stripe_repeater .content a {
    margin-top: 1rem;
    margin-bottom: 1.75rem;
  }








  @media (min-width: 767px) and (max-width: 768px) {
    #why_connect_with_us .bg_color_stripe_repeater .svg {
      width: 40px;
      margin: 0 0 0 -10px;
    }

    #why_connect_with_us .bg_color_stripe_repeater.links a {
      background-color: #DFDFDF;
      border-radius: 25px;
      padding: 0.5rem 1rem;
      color: #001A70;
      font-size: 0.5rem;
    }
  }

  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      
    }

    #why_connect_with_us .bg_color_stripe_repeater .svg {
      width: 30%;
      margin: 8px;
    }

    #services .bg_color_stripe_repeater.links a,
    #why_connect_with_us .bg_color_stripe_repeater.links a {
      background-color: #DFDFDF;
      border-radius: 25px;
      padding: 0.5rem 1rem;
      color: #001A70;
      font-size: 0.75rem;
    }

    #why_connect_with_us.light .bg_color_stripe_repeater {
      padding: 0 15px;
    }

    #why_connect_with_us.light h2 {
      margin-bottom: 3rem;
    }
  }

</style>

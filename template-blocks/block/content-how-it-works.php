<?php
/**
 * Block Name: How it works
 *
 * This is the template that displays the "how it works" block.
 */

// get image field (array)
// $image = get_field('image');

// create id attribute for specific styling
$id = 'howitworks-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('heading'); ?></h1>
        <p class="description"><?php echo the_field('description'); ?></p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php if( have_rows('repeater') ): ?>
        <?php $i = 1; ?>
          <?php while( have_rows('repeater') ): the_row(); ?>
            <?php $count = count(get_field('repeater')); ?>

            <?php
              $image = get_sub_field('image');
              $content = get_sub_field('content', false, false);
            ?>

            <div class="col-md">
              <div class="image_or_svg">
                <?php if (strpos($image['url'], '.svg') == true) { ?>
                  <?php echo file_get_contents($image['url']); ?>
                <?php } else { ?>
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                <?php } ?>
              </div>

              <div class="circle-wrapper <?php echo $i == 1 ? "first" : "" ?> <?php echo $i == $count ? "last" : "" ?>">
                <div class="circle"></div>
              </div>
              <div class="content">
                <?php echo $content; ?>
              </div>
            </div>

            <?php $i++; ?>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>  
</section>



<style type="text/css">
	#<?php echo $id; ?> {
    padding: 2rem 0;
	}

  #<?php echo $id; ?> .description {
    text-align: center;
  }

  #<?php echo $id; ?> .content {
    margin: 1rem auto;
    text-align: center;
  }

  #<?php echo $id; ?> .image_or_svg {
    margin: 1rem auto;
    text-align: center;
  }

  #<?php echo $id; ?> h2 {
    text-align: center;
  }

  #<?php echo $id; ?> .circle {
    position: relative;
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    background-color: #fff;
    margin: 0.5rem auto;
    border: 1px solid #001A70;
    z-index: 1;
  }

  #<?php echo $id; ?> .circle-wrapper {
    position: relative;
  }

  #<?php echo $id; ?> .circle-wrapper:after {
    content: '';
    display: block;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: -22px;
    right: -15px;
    border-bottom: 2px dashed;
    border-left: 2px solid white;
    border-right: 2px solid white;
    height: 2px;
  }

  #<?php echo $id; ?> .circle-wrapper.first:after {
    left: 50%;
  }

  #<?php echo $id; ?> .circle-wrapper.last:after {
    right: 50%;
  }

  @media (max-width: 767px) {
    
  }
</style>





<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) { 
    (function ($) {
      $(window).on('load', function () {
        var id = <?php echo json_encode($id); ?>;
        equalheight($(`#${id} .image_or_svg`));
      })
    })(jQuery, window);
  })
</script>
<?php
/**
 * Block Name: Custom heading_and_arguments
 *
 *
 */

// create id attribute for specific styling
$id = 'customheadingandarguments-' . $block['id'];

?>

<article id="<?php echo $id; ?>">
  <div class="container">
    <?php if(get_field('heading')) { ?>
      <h1 class="mb-2"><?php the_field('heading') ?></h1>
    <?php } ?>
    
    <?php if(get_field('subheading')) { ?>
      <h2 style="color: <?php the_field('subheading_color') ?>; margin-top: <?php echo get_field('heading') ? '' : '0' ?>;"><?php the_field('subheading') ?></h2>
    <?php } ?>

    <div class="row justify-content-center">
      <?php if( have_rows('repeater') ): ?>
        <?php $i = 1 ?>
          <?php while( have_rows('repeater') ): the_row(); ?>

            <?php
              $content = get_sub_field('content', false, false);
              $background_color = get_sub_field('background_color');
              $text_color = get_sub_field('text_color');
            ?>

            <!-- if there is only one column, make it full width -->
            <div class="col-md<?php echo count(get_field('repeater')) == 1 ? "" : "-3" ?>">
              <div class="content <?php echo get_sub_field('show_background_color') ? "" : "no-bg-color" ?>" style="background-color: <?php echo $background_color; ?>; color: <?php echo $text_color; ?>;">
                <?php echo $content; ?>
              </div>
            </div>

            <?php if ($i % 4 == 0 && count(get_field('repeater')) > 4 ) { ?>
              </div>
              <div class="row justify-content-center">
            <?php } ?>
          
          <?php $i++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</article>




<style type="text/css">
  #<?php echo $id; ?> {
    padding: 2rem 0 0 0;
  }

  #<?php echo $id; ?> h1 {
    text-transform: none;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'camptonbook', sans-serif;
    margin-top: 2rem;
    text-align: center;
    text-transform: none;
  }

	#<?php echo $id; ?> .content {
    padding: 1rem;
    background-color: #EFEFEF;
    text-align: center;
  }

  #<?php echo $id; ?> .row:first-of-type {
    margin-top: 2rem;
  }

  #<?php echo $id; ?> .row {
    margin-bottom: 1.5rem;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(1n) .content {
    background-color: #EFEFEF;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(2n) .content {
    background-color: #DFDFDF;
  }

  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(1n) .content {
    background-color: #DFDFDF;
  }

  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(2n) .content {
    background-color: #EFEFEF;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(1n) .content.no-bg-color,
  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(2n) .content.no-bg-color,
  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(1n) .content.no-bg-color,
  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(2n) .content.no-bg-color {
    background-color: transparent;
  }

  







  @media (max-width: 767px) {
    
  }

</style>





<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) { 
    (function ($) {
      $(window).on('load', function () {
        var id = <?php echo json_encode($id); ?>;
        equalheight($(`#${id} .content`));
        equalheight($(`#${id} img`));
      })
    })(jQuery, window);
  })
</script>

<?php
/**
 * Block Name: Custom section
 *
 *
 */

// create id attribute for specific styling
$id = 'customsection-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php the_field('custom_section') ?>
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    padding-top: 1.5rem;
    padding-bottom: 1rem;
    background-color: <?php the_field('custom_section_background_color') ?>;
    color: <?php the_field('custom_section_text_color') ?>;
	}







  @media (max-width: 767px) {
    
  }

</style>

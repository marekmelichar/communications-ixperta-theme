<?php
/**
 * Block Name: Custom personal testimonial
 *
 *
 */

$image = get_field('custom_personal_testimonial_photo');

// create id attribute for specific styling
$id = 'custompersonaltestimonial-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php the_field('custom_personal_testimonial_heading') ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 image_or_svg">
        <?php if (strpos($image['url'], '.svg') == true) { ?>
          <?php echo file_get_contents($image['url']); ?>
        <?php } else { ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <?php } ?>
      </div>
      <div class="col-md-10">
        <h2><?php the_field('custom_personal_testimonial_name') ?></h2>
        <h2><?php the_field('custom_personal_testimonial_position') ?></h2>
        <div><?php the_field('custom_personal_testimonial_text') ?></div>
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    padding-top: 1.5rem;
    padding-bottom: 1rem;
    background-color: #DFDFDF;
  }
  
  #<?php echo $id; ?> h2 {
    font-family: 'camptonsemibold', sans-serif;
    margin-bottom: 0.5rem;
  }

  #<?php echo $id; ?> h2:after {
    display: none;
  }

  #<?php echo $id; ?> .image_or_svg {
    justify-content: center;
    display: flex;
    align-items: center;
  }

  #<?php echo $id; ?> .image_or_svg svg,
  #<?php echo $id; ?> .image_or_svg img {
    border-radius: 50%;
    border: 1px solid #bababa;
  }







  @media (max-width: 767px) {
    #<?php echo $id; ?> .image_or_svg {
      margin: 2rem auto;
    }
  }

</style>

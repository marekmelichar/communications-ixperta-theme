<?php
/**
 * Block Name: Custom heading
 *
 *
 */

// create id attribute for specific styling
$id = 'customheading-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php the_field('custom_heading') ?></h1>
        <h2><?php the_field('custom_subheading') ?></h2>
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    padding: 1rem 1rem 0.75rem 1rem;
    margin-bottom: 1rem;
    text-align: center;
    background-color: #EFEFEF;
	}

  #<?php echo $id; ?> h1 {
    font-family: 'camptonbold', sans-serif;
    font-size: 2.25rem;
    color: #001A70;
    margin: 0;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'camptonbook', sans-serif;
    font-size: 1rem;
    color: #001A70;
    margin: 20px 0 0 0;
    position: relative;
  }

  #<?php echo $id; ?> h2:after {
    content: '';
    display: none;
  }







  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      padding: 4rem 2rem 2rem 2rem;
    }
  }

</style>

<?php
/**
 * Block Name: Banner
 *
 *
 */

// create id attribute for specific styling
$id = 'banner-' . $block['id'];
$image = get_field('banner_background_image');

?>

<?php if( !empty($image) ): ?>

<article id="<?php echo $id; ?>" style="background: url(<?php echo $image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
  <div class="filter"></div>
  <div class="container content">
    <div class="row">
      <div class="col">
        <h1 class="fz36"><?php the_field('banner_h1'); ?></h1>
        <h2 class="fz22"><?php the_field('banner_h2'); ?></h2>
      </div>
    </div>
  </div>
</article>

<?php endif; ?>





<style type="text/css">
  #<?php echo $id; ?> {
    position: relative;
    height: 450px;
  }

  #<?php echo $id; ?> .filter {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(0,0,0,0.5);
  }

  #<?php echo $id; ?> .content {
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }

  #<?php echo $id; ?> h1 {
    font-family: 'camptonbook', sans-serif;
    position: relative;
  }

  #<?php echo $id; ?> h1:after {
    background-color: #fff;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'camptonbook', sans-serif;
    position: relative;
    color: #fff;
  }

  #<?php echo $id; ?> h2:after {
    display: none;
  }







  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      
    }
  }

</style>

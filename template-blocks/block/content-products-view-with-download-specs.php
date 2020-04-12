<?php
/**
 * Block Name: Products view with download specs
 *
 *
 */

// create id attribute for specific styling
$id = 'products_view_with_download_specs-' . $block['id'];
// $image = get_field('banner_background_image');

$tilescount = get_field('prod_view_how_many_tiles_in_row');
?>

<article id="<?php echo $id; ?>">
  <div class="container">
    <?php if(get_field('prod_view_h1')) { ?>
      <div class="row main_heading">
        <div class="col">
          <h1><?php the_field('prod_view_h1'); ?></h1>
        </div>
      </div>
    <?php } ?>
    <?php if(get_field('prod_view_h2')) { ?>
      <div class="row main_subheading">
        <div class="col">
          <h2><?php the_field('prod_view_h2'); ?></h2>
        </div>
      </div>
    <?php } ?>
    <div class="row main_description">
      <div class="col">
        <p><?php the_field('prod_view_description'); ?></p>
      </div>
    </div>

    <div class="row justify-content-center">
      <?php if( have_rows('prod_view_pills') ): ?>
        <ul class="prod-view-pills">
          <?php while( have_rows('prod_view_pills') ): the_row(); ?>

              <?php
                $pill = get_sub_field('pill');
                $href = get_sub_field('href');
              ?>

              <li class="prod-view-pill">
                <a href="<?php echo $href; ?>"><?php echo $pill; ?></a>
              </li>

          <?php endwhile; ?>
        </ul>
      <?php endif; ?>


    <div class="row justify-content-center">
      <?php if( have_rows('prod_view_repeater') ): ?>
        <?php $i = 1 ?>
        <?php while( have_rows('prod_view_repeater') ): the_row(); ?>

            <?php
              $image = get_sub_field('image');
              $heading = get_sub_field('heading');
              $tags = get_sub_field('tags');
              $content = get_sub_field('content', false, false);
            ?>

            <div class="col-md<?php echo count(get_field('prod_view_repeater')) == 1 ? "" : "-" ?><?php echo 12 / $tilescount ?> text-center">
              <div class="image_or_svg">
                <?php if($image) { ?>
                  <?php if (strpos($image['url'], '.svg') == true) { ?>
                    <?php echo file_get_contents($image['url']); ?>
                  <?php } else { ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                  <?php } ?>
                <?php } else { ?>
                  <strong><?php echo $i; ?></strong>
                <?php } ?>
              </div>

              <h3><?php echo $heading; ?></h3>

              <?php if($tags) { ?>
                <ul class="phone-tags">
                  <?php foreach ($tags as $tag) { ?>
                    <li class="phone-tag"><?php echo $tag["value"] ?></li>
                  <?php } ?>
                </ul>
              <?php } ?>

              <div class="content">
                <?php echo $content; ?>
              </div>
            </div>

            <?php if ($tilescount && $i % $tilescount == 0 && count(get_field('prod_view_repeater')) > $tilescount ) { ?>
              </div>
              <div class="row justify-content-center">
            <?php } ?>
          
          <?php $i++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="row download">
      <div class="col">
        <div class="content"><?php echo the_field('prod_view_download_content') ?></div>
      </div>
    </div>
  </div>
</article>






<style type="text/css">
  #<?php echo $id; ?> .main_heading {
    text-align: center;
    background-color: #EFEFEF;
    padding: 1.5rem 3rem;
  }

  #<?php echo $id; ?> .main_subheading {
    margin-top: 1rem;
    text-align: center;
    background-color: #EFEFEF;
    padding: 1.5rem 3rem;
  }

  #<?php echo $id; ?> .main_subheading h2 {
    text-transform: uppercase;
    margin: 0;
  }

  #<?php echo $id; ?> .main_description {
    margin-top: 1rem;
    text-align: center;
  }

  #<?php echo $id; ?> .prod-view-pills {
    padding: 0;
    margin: 0;
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #<?php echo $id; ?> .prod-view-pills .prod-view-pill {
    margin: 1rem 1.5rem;
    border-radius: 25px;
    background-color: #DFDFDF;
    padding: 0.5rem 2rem;
    text-align: center;
  }

  #<?php echo $id; ?> .prod-view-pills .prod-view-pill a {
    color: #001A70;
  }

  #<?php echo $id; ?> h3 {
    font-family: 'camptonsemibold', sans-serif;
    color: #00B388;
    margin: 2rem auto 1rem auto;
  }

  #<?php echo $id; ?> .phone-tags {
    padding: 0;
    margin: 0;
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #<?php echo $id; ?> .phone-tags .phone-tag {
    margin: 0 0.5rem;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #001A70;
    padding: 0.5rem;
    color: #fff;
    line-height: 0.9;
    text-align: center;
  }

  #<?php echo $id; ?> .content {
    padding: 1.5rem;
  }

  #<?php echo $id; ?> .download {
    
  }

  #<?php echo $id; ?> .shortcode-btn {
    width: 80%;
    font-size: 0.875rem;
  }








  @media (max-width: 767px) {
    #<?php echo $id; ?> .prod-view-pills {
      display: block;
    }
  }

</style>

<?php
/**
 * Block Name: Tiles of posts
 *
 *
 */

// create id attribute for specific styling
$id = 'tilesofposts-' . $block['id'];
// $image = get_field('banner_background_image');

?>

<article id="#<?php echo $id; ?>">
    <div class="container">
      <div class="row">

        <?php

          $post_objects = get_field('tiles_of_posts');

          if( $post_objects ): ?>
            <?php $index = 1; ?>
            <?php foreach( $post_objects as $post_object): ?>

              <?php $post_custom_excerpt_image = get_field('post_custom_excerpt_image', $post_object); ?>
              <?php $post_custom_excerpt_heading = get_field('post_custom_excerpt_heading', $post_object); ?>
              <?php $post_custom_excerpt_subheading = get_field('post_custom_excerpt_subheading', $post_object); ?>
              <?php $post_custom_excerpt_description = get_field('post_custom_excerpt_description', $post_object); ?>

              <?php if($index == 1) { ?>
                <div class="tile tile-1 col-md-6" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } elseif($index == 2) { ?>
                <div class="tile tile-2 col-md-3" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } elseif($index == 3) { ?>
                <div class="tile tile-3 col-md-3" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } elseif($index == 4) { ?>
                <div class="tile tile-4 col-md-12" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } ?>

              <?php $index++; ?>
            <?php endforeach; ?>
          <?php endif; ?>

      </div>
    </div>
  </div>
</article>






<style type="text/css">
  #<?php echo $id; ?> {
  }


  #<?php echo $id; ?> {
    margin: 2rem 0 0 0;
  }

  #<?php echo $id; ?> .tile {
    position: relative;
  }

  #<?php echo $id; ?> .tile .tags {
    position: absolute;
    bottom: 60px;
    left: 10px;
    z-index: 2;
  }

  #<?php echo $id; ?> .tile .tags a {
    background-color: #DFDFDF;
    border-radius: 25px;
    padding: 0.4rem 2rem;
    margin: 0 5px;
    text-shadow: none;
    position: relative;
    color: #001A70;
    font-size: 0.75rem;
  }

  #<?php echo $id; ?> .tile .tags a:before {
    display: block;
    content: '#';
    position: absolute;
    top: 4px;
    left: 20px;
  }








  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      
    }

    #<?php echo $id; ?> .tile .tags {
      text-align: left;
      bottom: 40px;
      left: 0;
    }

    #<?php echo $id; ?> .tile .tags a {
      padding: 0.3rem 1rem;
      margin: 5px;
      font-size: 0.6rem;
      display: inline-block;
    }

    #<?php echo $id; ?> .tile .tags a:before {
      top: 5px;
      left: 8px;
    }
  }




  @media (max-width: 321px) {
    #<?php echo $id; ?> .tile .tags {
      bottom: 58px;
    }
  }

</style>

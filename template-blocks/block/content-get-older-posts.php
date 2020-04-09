<?php
/**
 * Block Name: Get older posts
 *
 *
 */

// create id attribute for specific styling
$id = 'getolderposts-' . $block['id'];

?>

<article id="<?php echo $id; ?>" class="get_older_posts"><!-- GET OLDER POSTS -->
  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php the_field('get_older_posts_heading'); ?></h1>
      </div>
    </div>

      <?php
        $get_other_posts = new WP_Query( array('post__not_in' => array(get_the_ID())));

        $index = 1; ?>

          <div class="row">

          <?php while ( $get_other_posts->have_posts() ) : $get_other_posts->the_post();?>

              <?php $post_custom_excerpt_image = get_field('post_custom_excerpt_image'); ?>

              <?php if(($index % 3) == 1) { ?>
                </div>
                <div class="row no-gutters grouped-posts <?php if($index == 1): ?> 0 <?php else: ?> mt-5 <?php endif; ?>">
              <?php } ?>

                  <div class="col-md-4">
                    <div class="row no-gutters">
                      <div class="col-6 pr-3">
                        <div class="post_custom_excerpt_image" style="background-image: url(<?php echo $post_custom_excerpt_image['url'] ?>);">
                          <!-- <img src="<?php echo $post_custom_excerpt_image['url'] ?>" alt="<?php echo $post_custom_excerpt_image['alt'] ?>"> -->
                        </div>
                      </div>
                      <div class="col-6 pr-3">
                        <h3>
                          <a href="<?php the_permalink(); ?>">
                            <?php //if(strlen(get_the_title()) > 30) {
                              //echo wp_trim_words( get_the_title(), 4, '...' );
                            //} ?>
                            <?php echo wp_trim_words( get_the_title(), 4, '...' ); ?>
                          </a>
                        </h3>
                        <div class="published-date">
                          <?php echo get_the_date(); ?>
                        </div>
                        <div class="excerpt">
                          <?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?>
                        </div>
                        <a class="arrow-green-circle" href="<?php the_permalink(); ?>">
                          <i class="fas fa-chevron-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>

            <?php $index++; ?>
          <?php endwhile; ?>

        </div>

      <?php wp_reset_query(); ?>
      <?php wp_reset_postdata(); ?>
  </div>
</article><!-- / GET OLDER POSTS -->






<style type="text/css">
  #<?php echo $id; ?> {
    
  }


  #<?php echo $id; ?> .get_older_posts {
    position: relative;
    padding: 2rem 0 3rem 0;
  }

  #<?php echo $id; ?> .get_older_posts:before {
    content: '';
    position: absolute;
    top: 0;
    width: 100%;
    border-top: 1px solid #00B388;
  }

  #<?php echo $id; ?> .blog {
    padding-top: 1rem;
  }

  #<?php echo $id; ?> .archive.tag .get_older_posts:before {
    display: none;
  }

  #<?php echo $id; ?> .page-template-home .get_older_posts:before {
    display: none;
  }

  #<?php echo $id; ?> .get_older_posts h2 {
    text-align: center;
    margin: 0.75rem 0 3rem 0;
  }

  #<?php echo $id; ?> .get_older_posts h2:after {
    left: 50%;
    transform: translateX(-50%);
  }

  #<?php echo $id; ?> .post_custom_excerpt_image {
    min-height: 170px;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

  #<?php echo $id; ?> .get_older_posts h3 {
    text-transform: uppercase;
    margin: 0;
  }

  #<?php echo $id; ?> .get_older_posts .published-date {
    font-size: 0.75rem;
    font-style: italic;
    margin: 0.25rem 0;
  }

  #<?php echo $id; ?> .get_older_posts .excerpt {
    font-size: 0.75rem;
    margin: 0 0 0.5rem 0;
  }





  @media (min-width: 767px) and (max-width: 768px) {
    #<?php echo $id; ?> .get_older_posts h3 {
      font-size: 0.75rem;
    }
  }






  @media (max-width: 767px) {
    #<?php echo $id; ?> .get_older_posts .grouped-posts [class*=col-] {
      margin-top: 1rem;
    }

    #<?php echo $id; ?> .get_older_posts h3 {
      font-size: 0.75rem;
    }
  }

</style>

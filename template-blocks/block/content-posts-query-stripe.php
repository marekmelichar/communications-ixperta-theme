<?php
/**
 * Block Name: Posts query stripe
 *
 *
 */

// create id attribute for specific styling
$id = 'postsquerystripe-' . $block['id'];
// $image = get_field('banner_background_image');

?>

<article id="<?php echo $id; ?>">
  <div class="container p-0">
    <h1><?php echo the_field('posts_query_heading') ?></h1>

    <div class="row blocks">
      <?php $post_objects = get_field('posts_query_posts');
        if( $post_objects ): ?>

            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>

                <?php setup_postdata($post); ?>

                <?php $post_custom_excerpt_image = get_field('post_custom_excerpt_image', $post); ?>

                <div class="col-md">
                  <div class="row no-gutters">
                    <div class="col-6 pr-3">
                      <img src="<?php echo $post_custom_excerpt_image['url']; ?>" alt="<?php echo $post_custom_excerpt_image['alt']; ?>">
                    </div>
                    <div class="col-6">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ?></h3>
                      </a>
                      <div class="published-date">
                        <?php //the_date('d.m.Y', '<span>', '</span>'); ?>
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

            <?php endforeach; ?>

        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    </div>
  </div>
</article>






<style type="text/css">
  #<?php echo $id; ?> {
  }


  #<?php echo $id; ?> {
    padding: 1.5rem 0;
  }

  #<?php echo $id; ?> h2 {
    text-align: center;
  }

  #<?php echo $id; ?> h2:after {
    left: 50%;
    transform: translateX(-50%);
  }

  #<?php echo $id; ?> .blocks {
    margin: 3rem 0 0 0;
  }

  #<?php echo $id; ?> .blocks > [class*=col]:first-child {
    padding-left: 0;
  }

  #<?php echo $id; ?> .blocks > [class*=col]:last-child {
    padding-right: 0;
  }

  #<?php echo $id; ?> .blocks h3 {
    text-transform: uppercase;
  }

  #<?php echo $id; ?> .blocks .published-date {
    font-style: italic;
    font-size: 0.75rem;
  }

  #<?php echo $id; ?> .blocks .excerpt {
    font-size: 0.75rem;
  }

  #<?php echo $id; ?> .blocks .arrow-green-circle {
    margin-top: 1rem;
  }

  #<?php echo $id; ?> img {
    width: 100%;
  }

  #<?php echo $id; ?> a:hover {
    color: #00B388;
  }








  @media (max-width: 767px) {
    #<?php echo $id; ?> .blocks > [class*=col] {
      margin-top: 1rem;
    }

    #<?php echo $id; ?> .blocks > [class*=col]:first-child {
      padding-left: 15px;
    }

    #<?php echo $id; ?> .blocks > [class*=col]:last-child {
      padding-right: 15px;
    }
  }

</style>

<?php
/**
 * Block Name: Contact about us
 *
 *
 */

// create id attribute for specific styling
$id = 'contactaboutus-' . $block['id'];

?>

<article id="<?php echo $id; ?>" class="<?php echo get_field('show_tiles') ? "show_tiles" : "" ?>" style="background-color: <?php echo get_field('bg_color') ? the_field('bg_color') : "" ?>; color: <?php echo get_field('text_color') ? the_field('text_color') : "" ?>; ">
  <div class="container">

    <?php if(get_field('show_tiles')) { ?>
      <div class="row about_us_tiles justify-content-center">

        <?php if( have_rows('tiles_repeater') ): ?>
          <?php while( have_rows('tiles_repeater') ): the_row();
            // vars
            $content = get_sub_field('content');
            $button_text = get_sub_field('button_text');
            $href = get_sub_field('href');
            ?>

            <!-- if there is only one column, make it full width -->
            <div class="col-md<?php echo count(get_field('tiles_repeater')) == 1 ? "-6" : "" ?> about_us_tile">
              <div class="content">
                <?php echo $content; ?>
              </div>
              <?php if($button_text && $href) { ?>
                <div class="footer">
                  <a href="<?php echo $href; ?>">
                    <?php echo $button_text; ?>
                  </a>
                </div>
              <?php } ?>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    <?php } ?>

    <?php if(get_field('about_us_heading')) { ?>
      <div class="row">
        <div class="col">
            <h1 style="color: <?php echo get_field('main_heading_color') ? get_field('main_heading_color') : "" ?>;"><?php echo the_field('about_us_heading'); ?></h1>
          <?php if(get_field('about_us_subheading')) { ?>
            <h2 style="color: <?php echo get_field('main_subheading_color') ? get_field('main_subheading_color') : "" ?>;"><?php echo the_field('about_us_subheading'); ?></h2>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <div class="row justify-content-center members">

      <?php $index = 1; ?>

      <?php $count = count(get_field('about_us_repeater')); ?>

      <?php if( have_rows('about_us_repeater') ): ?>
        <?php while( have_rows('about_us_repeater') ): the_row();

          // vars
          $image = get_sub_field('image');
          $name = get_sub_field('name');
          $description = get_sub_field('description');
          $phone = get_sub_field('phone');
          $email = get_sub_field('email');

          ?>

            <?php if(($index % 2) == 1) { ?>
              </div>
              <div class="row justify-content-center members">
            <?php } ?>

              <div class="col-md member <?php if($count == 1) { ?>only_one_col<?php } ?>">
                <div class="row">
                  <div class="col-md-4">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div>
                  <div class="col-md-8">
                    <h2 style="color: <?php echo get_sub_field('h2_color') ? get_sub_field('h2_color') : "" ?>;">
                      <?php echo $name; ?>
                      <div class="phone">
                        <a href="tel:<?php echo $phone; ?>" style="color: <?php echo get_sub_field('h2_color') ? get_sub_field('h2_color') : "" ?>;"><?php echo $phone; ?></a>
                      </div>
                    </h2>
                    <div class="desc"><?php echo $description; ?></div>
                    
                    <div class="mail">
                      <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>

                    <?php if( have_rows('social_media_icons') ): ?>
                      <?php while( have_rows('social_media_icons') ): the_row();

                        // vars
                        $social_icon = get_sub_field('social_icon');
                        $social_href = get_sub_field('social_href');

                        ?>

                        <ul class="social-list">
                          <?php if($social_icon): ?>
                            <li>
                              <a href="<?php echo $social_href; ?>">
                                <div class="social-icon svg">
                                  <?php get_template_part('svg/' . $social_icon . '.svg'); ?>
                                </div>
                              </a>
                            </li>
                          <?php endif; ?>
                        </ul>



                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

            <?php $index++; ?>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>
    </div>
  </div>
</article>






<style type="text/css">

  #<?php echo $id; ?> {
    position: relative;
    padding: 1.5rem 0 3rem 0;
    background-color: #00B388;
    color: #fff;
    /* margin-top: 5px; */
  }

  #<?php echo $id; ?> a {
    color: #001A70;
  }

  #<?php echo $id; ?> .mail a {
    text-decoration: underline;
  }

  #<?php echo $id; ?> .phone a {
    color: #fff;
  }

  #<?php echo $id; ?> .desc {
    color: #001A70;
  }

  #<?php echo $id; ?> h1 {
    text-align: center;
    color: #fff;
  }

  #<?php echo $id; ?> h1:after {
    left: 50%;
    transform: translateX(-50%);
    background-color: #fff;
  }

  #<?php echo $id; ?> h2 {
    text-align: center;
    color: #fff;
  }

  #<?php echo $id; ?> .member {
    margin-top: 1.5rem;
  }

  #<?php echo $id; ?> .member h2 {
    text-align: left;
    text-transform: none;
    margin-bottom: 3rem;
  }

  #<?php echo $id; ?> .member h2:after {
    content: '';
    display: block;
    position: absolute;
    bottom: -28px;
    width: 100px;
    height: 4px;
    background-color: #001A70;
    left: 0;
    transform: none;
  }

  #<?php echo $id; ?> .member .social-icon {
    width: 40px;
    height: 40px;
  }

  #<?php echo $id; ?> .member .social-icon svg {
    width: 40px;
    height: 40px;
  }

  #<?php echo $id; ?> .member img {
    border-radius: 50%;
    border: 1px solid #bababa;
  }

  #<?php echo $id; ?> .member .social-list {
    margin: 1rem 0 0 0;
    padding: 0 1rem 0 0;
    list-style-type: none;
    display: inline-block;
    left: -50px;
    top: 115px;
    position: absolute;
  }

  #<?php echo $id; ?> .col.only_one_col {
    max-width: 50%;
    margin: 1.5rem auto 0 auto;
  }

  .page-template-template-contact #<?php echo $id; ?> {
    padding: 0;
  }

  .page-template-template-children_page_L3 #<?php echo $id; ?> {
    border-top: 1px solid #001A70;
  }

  #<?php echo $id; ?> .about_us_tile .content {
    padding: 1.5rem 3rem;
    text-align: center;
    background-color: #EFEFEF;
    color: #001A70;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 3px 3px 0 0;
  }

  #<?php echo $id; ?> .about_us_tile .footer {
    padding-bottom: 3rem;
    text-align: center;
    background-color: #EFEFEF;
    color: #001A70;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 0 0 3px 3px;
  }

  #<?php echo $id; ?> .about_us_tile a {
    padding: 1rem 4rem;
    background: #00B388;
    color: #fff;
    border-radius: 25px;;
  }

  #<?php echo $id; ?> .about_us_tile:nth-child(2n) .content,
  #<?php echo $id; ?> .about_us_tile:nth-child(2n) .footer {
    background-color: #DFDFDF;
  }

  .page-id-246 #<?php echo $id; ?> h1:after {
    left: 50%;
    transform: translateX(-50%);
    background-color: #00B388;
  }







  @media (max-width: 767px) {
    #<?php echo $id; ?> .about_us_tile {
      margin-bottom: 1rem;
    }

    #<?php echo $id; ?> .member .social-list {
      top: 0;
    }

    #<?php echo $id; ?> .col.only_one_col {
      max-width: 100%;
      margin: 1rem auto;
    }
  }

</style>

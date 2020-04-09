<?php if(get_field('top_info_navbar_repeater', 'options')) : ?>
  <div id="top_info_navbar_repeater">
    <div class="container">
      <div class="row">
        <div class="col left-side-claim">
          <?php the_field('top_info_claim', 'options'); ?>
        </div>
        <div class="col right-side-content">
          <ul class="right-side-informations">
            <?php while(has_sub_field('top_info_navbar_repeater', 'options')) : ?>
              <li>
                <?php the_sub_field('who', 'options'); ?>
                <div class="svg">
                  <?php get_template_part('svg/' . get_sub_field('icon', 'options') . '.svg'); ?>
                </div>
                <?php the_sub_field('contact', false, false); ?>
              </li>
            <?php endwhile; ?>
          </ul>
          <div class="desktop-search">
            <div class="search-icon">
              <?php get_template_part('svg/icon-search.svg'); ?>
            </div>
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

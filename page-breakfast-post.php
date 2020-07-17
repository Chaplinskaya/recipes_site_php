<?php
/*
Template Name: страница для page-breakfast
Template Post Type: first_meal, second_meal, bakery, fish, children, relevant_posts, relevant_newyear, christmas12, relevant_children, breakfast, christmas, post
*/
?>
<?php get_header(); ?>
<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
        <div class="newyear_title"><h1>Что приготовить на завтрак</h1></div>
        <div class="christmas12-text"></div>
        <div id="primary-main-two" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-halves cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 27,
            'post_type'   => 'breakfast',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            foreach( $posts as $post ){
              setup_postdata($post);
              //?>
            <div class="columns portfolio-item">
              <div class="item-wrap">
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail(); ?>
                  <div class="overlay"></div>
                  <div class="link-icon"><i class="fa fa-link"></i></div>
                </a>
                <div class="portfolio-item-meta">
                  <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                  <!--<p><?php the_excerpt(); ?></p>-->
                </div>
              </div>
            </div>
            <?php
            }
            wp_reset_postdata(); // сброс
            ?>
          </div>
        </div> <!-- primary end-->
        <div id="secondary-two" class="four columns end">
	         <?php get_sidebar(page); ?>
	       </div> <!-- Secondary End-->
      </div>
    </section> <!-- end section -->
  </div> <!-- #page-content end-->
</div> <!-- content End-->
<!-- Tweets Section
   ================================================== -->
<section id="tweets">
	<div class="row">
	    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
	</div>
</section>  <!-- Tweets Section End-->
<!-- footer
================================================== -->
   <?php get_footer(); ?>
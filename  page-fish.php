<?php 
/*
Template Name: fish
*/
?>
<?php get_header(); ?>
<div class="content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
        <h1>Блюда из рыбы</h1>
        <div class="text_children">
        </div>
        <div id="primary-main-two" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-halves cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 27,
            'post_type'   => 'fish',
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
            <?php the_posts_pagination(); ?>
          </div>
        </div> <!-- primary end-->
        <div id="secondary-two" class="four columns end">
	         <?php get_sidebar(page); ?>
	       </div> <!-- Secondary End-->
      </div>
    </section> <!-- end section -->
  </div> <!-- #page-content end-->
</div> <!-- content End-->
<section id="tweets">
	<div class="row">
    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
  </div>
</section>
<!-- footer
================================================== -->
   <?php get_footer(); ?>
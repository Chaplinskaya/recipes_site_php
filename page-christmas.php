<?php 
/*
Template Name: christmas

*/
?>
<?php get_header(); ?>

<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
        <h1>Новогодние рецепты</h1>
        <p>Новогоднее меню 2020 может быть составлено в самых различных стилях и посвящено блюдам разных стран. Это может быть также и стол в традиционном стиле русского застолья. На таком столе будут хорошо смотреться селедка «под шубой», отварной язык, заливное, а также многочисленные салаты — Оливье, Столичный, Мимоза и другие. Также хороши для новогоднего стола небольшие закуски из вареных яиц. На горячее запеките мясо, утку или поросенка, нафаршируйте рыбу. И не забудьте про десерт. Какое же новогоднее меню без любимого торта, пирожного или самодельных конфет, которые станут отличным завершением праздничной ночи.</p>
    
        <div id="primary-main" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-thirds cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 24,
            'post_type'   => 'christmas',
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
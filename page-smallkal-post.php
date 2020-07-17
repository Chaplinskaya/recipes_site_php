<?php
/*
Template Name: страница для page-smallkal
Template Post Type: first_meal, second_meal, bakery, fish, children, meat, relevant_posts, relevant_newyear, christmas, smallkalory, cocktail, post
*/
?>
<?php get_header(); ?>

<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
        <h1>Низкокалорийные блюда</h1>
    
        <div id="primary-main-two" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-halves cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 15,
            'post_type'   => 'smallkalory',
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
          </div>
      <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(page); ?>
	          	<!-- admitad.banner: s797c4wyar642af9040b16525dc3e8 Aliexpress WW -->
<a target="_blank" rel="nofollow" href="https://alitems.com/g/s797c4wyar642af9040b16525dc3e8/?i=4"><img width="320" height="480" border="0" src="https://ad.admitad.com/b/s797c4wyar642af9040b16525dc3e8/" alt="Aliexpress WW"/></a>
<!-- /admitad.banner -->
        
       
	        </div> <!-- Secondary End-->
</div>

      </section> <!-- end section -->
    <div class="nine columns">
   <!-- admitad.banner: 76wu63ncgy642af9040bf0af71e07a SHEIN Many GEO's -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/76wu63ncgy642af9040bf0af71e07a/?i=4"><img width="468" height="60" border="0" src="https://ad.admitad.com/b/76wu63ncgy642af9040bf0af71e07a/" alt="SHEIN Many GEO&#39;s"/></a>
<!-- /admitad.banner -->
</div>
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
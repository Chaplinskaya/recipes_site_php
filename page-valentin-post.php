<?php
/*
Template Name: страница для page-valentin
Template Post Type: first_meal, second_meal, bakery, fish, children, meat, relevant, popular, relevant_posts, relevant_newyear, christmas, smallkalory, cocktail, valentin, post
*/
?>
<?php get_header(); ?>

<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div id="primary-page-one" class="twelve columns">
        
    
        <div id="secondary" class="four columns end">
                <div class="home_page2">
                    <?php get_sidebar(home); ?>
                    </br>
                    
                <div class="ten columns">
                
                       </div>
                </div>
            </br>
            
            <div class="ten columns"><!-- admitad.banner: a70rkn0e5p642af9040bfbdf0436a5 Rozetka UA -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/a70rkn0e5p642af9040bfbdf0436a5/?i=4"><img width="240" height="400" border="0" src="https://ad.admitad.com/b/a70rkn0e5p642af9040bfbdf0436a5/" alt="Rozetka UA"/></a>
<!-- /admitad.banner --></div>
    </div>
        
        
        <div id="primary-main-two" class=" columns portfolio-list">
          <h1 class="align-center">Для влюбленных</h1>
          <div id="portfolio-wrapper" class="bgrid-halves cf">
              
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 15,
            'post_type'   => 'valentin',
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
         
      
      <div id="secondary-two" class="four columns">
	          	<?php get_sidebar(page); ?>
	          	<div><!-- admitad.banner: s797c4wyar642af9040b16525dc3e8 Aliexpress WW --><a target="_blank" rel="nofollow" href="https://alitems.com/g/s797c4wyar642af9040b16525dc3e8/?i=4"><img width="320" height="480" border="0" src="https://ad.admitad.com/b/s797c4wyar642af9040b16525dc3e8/" alt="Aliexpress WW"/></a></div><!-- /admitad.banner -->
	          	</div>
	 </div> <!-- Secondary End-->

 <div class="">
          <div class="three columns">
  <!-- admitad.banner: 4q1n7jracv642af9040bcf883ae00d Goodwine UA -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/4q1n7jracv642af9040bcf883ae00d/?i=4"><img width="200" height="200" border="0" src="https://ad.admitad.com/b/4q1n7jracv642af9040bcf883ae00d/" alt="Goodwine UA"/></a>
<!-- /admitad.banner -->
</div>
<div class="three columns"><!-- admitad.banner: v7vc1ftzth642af9040b34cd397607 Foxtrot UA -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/v7vc1ftzth642af9040b34cd397607/?i=4"><img width="336" height="280" border="0" src="https://ad.admitad.com/b/v7vc1ftzth642af9040b34cd397607/" alt="Foxtrot UA"/></a>
<!-- /admitad.banner --></div>
          </div>
      

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
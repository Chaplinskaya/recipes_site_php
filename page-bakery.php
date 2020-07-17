<?php 
/*
Template Name: bakery

*/
?>
<?php get_header(); ?>
<div class="content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
        <h1>Выпечка</h1>
    
        

        <div id="primary-main-two" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-halves cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 12,
            'post_type'   => 'bakery',
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
          <div class="ten columns"><!-- admitad.banner: nef9repuji642af9040bfbdf0436a5 Rozetka UA -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/nef9repuji642af9040bfbdf0436a5/?i=4"><img width="600" height="90" border="0" src="https://ad.admitad.com/b/nef9repuji642af9040bfbdf0436a5/" alt="Rozetka UA"/></a></div>
<!-- /admitad.banner -->
        </div> <!-- primary end-->
       
       
       <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(page); ?>
	          	<div class="nine columns"><!-- admitad.banner: s797c4wyar642af9040b16525dc3e8 Aliexpress WW -->
<a target="_blank" rel="nofollow" href="https://alitems.com/g/s797c4wyar642af9040b16525dc3e8/?i=4"><img width="320" height="480" border="0" src="https://ad.admitad.com/b/s797c4wyar642af9040b16525dc3e8/" alt="Aliexpress WW"/></a>
<!-- /admitad.banner --></div>
</br>
<div><a href="https://ad.admitad.com/g/1e8d114494642af9040b16525dc3e8/?i=5&f_id=15830&ulp=http%3A%2F%2Fs.click.aliexpress.com%2Fe%2F_sHg0DP%3Fhot_product%3D1" target="_parent"><img src="https://ae01.alicdn.com/kf/H4bd3d2c18b6044cf9c1afd6c7e2ce658A/SILIKOLOVE-Cartoon-3D-Silicone-Mold-For-DIY-Homemade-Gumdrops-Jelly-Chocolate-Molds-Miniature-Gummy-Candy-Mold.jpg_220x220.jpg"/><span style="display:block;">SILIKOLOVE Cartoon 3D Silicone Mold For DIY Homemade Gumdrops Jelly Chocolate Molds Miniature Gummy Candy Mold Sugarcraft Tools</span></a></div>

	        </div> <!-- Secondary End-->
</div>

      </section> <!-- end section -->
    </div> <!-- #page-content end-->
  </div> <!-- content End-->

<!-- Tweets Section
   ================================================== -->
<section id="tweets" class="twelve columns">
	<div class="">
	    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
	</div>
	
</section>  <!-- Tweets Section End-->
<!-- footer
================================================== -->
   <?php get_footer(); ?>
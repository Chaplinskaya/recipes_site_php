<?php 
/*
Template Name: children

*/
?>
<?php get_header(); ?>

<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
       
       <div class="text_children twelve columns">
           <h1>Детские рецепты</h1>
           <p>Приготовить вусную и одновременно полезную еду для ребенка - ответственное и кропотливое занятие для всех родителей. Ведь растущему организму нужно много полезных веществ. А дети не всегда любят есть полезную еду, особенно с таким соблазном как сейчас. Например, тот же фастфуд. Очень редко можно встретить маму, которая бы похвасталась тем, что ее ребенок ест с удовольствием цветную или брюссельскую капусту))) А еще сложнее приходится семье, в которой ребенок не переносит глютен или лактозу. Тут вообще приходится выкручиваться изо всех сил, придумывая как полноценно накормить своего ребенка.</p>
       </div>
    
        <div id="primary-main-two" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-halves cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 27,
            'post_type'   => 'children',
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
           <div class="nine columns"><!-- admitad.banner: nef9repuji642af9040bfbdf0436a5 Rozetka UA -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/nef9repuji642af9040bfbdf0436a5/?i=4"><img width="600" height="90" border="0" src="https://ad.admitad.com/b/nef9repuji642af9040bfbdf0436a5/" alt="Rozetka UA"/></a>
<!-- /admitad.banner --></div>
          
        </div> <!-- primary end-->
      
      <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(page); ?>
	          	
	          	<div><!-- admitad.banner: yy8m86qgp0642af9040b458a3933ae Torba UA -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/yy8m86qgp0642af9040b458a3933ae/?i=4"><img width="200" height="300" border="0" src="https://ad.admitad.com/b/yy8m86qgp0642af9040b458a3933ae/" alt="Torba UA"/></a>
<!-- /admitad.banner --></div>
</br>
	          	<div><!-- admitad.banner: s797c4wyar642af9040b16525dc3e8 Aliexpress WW -->
                <a target="_blank" rel="nofollow" href="https://alitems.com/g/s797c4wyar642af9040b16525dc3e8/?i=4"><img width="320" height="480" border="0" src="https://ad.admitad.com/b/s797c4wyar642af9040b16525dc3e8/" alt="Aliexpress WW"/></a></div>
                <!-- /admitad.banner --></br>
                <div><a href="https://ad.admitad.com/g/1e8d114494642af9040b16525dc3e8/?i=5&f_id=15830&ulp=https%3A%2F%2Fs.click.aliexpress.com%2Fe%2F_sUg5u2%3Fhot_product%3D1" target="_parent"><img src="https://ae01.alicdn.com/kf/Hb9fb84cb4381460eaf90153e9e70c566m/2pcs-Baby-Girls-Striped-Two-piece-Swimsuit-Babies-Girl-Swimming-Bikini-Suit-Swimwear-Polka-Dot-Swimsuits.jpg_220x220.jpg"/><span style="display:block;">2pcs Baby Girls Striped Two-piece Swimsuit Babies Girl Swimming Bikini Suit Swimwear Polka Dot Swimsuits Bathing</span></a></div>
	            </div> <!-- Secondary End-->
 </br>
 <div></div>

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
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
        <p>Рыба - невероятно полезный продукт. В ней содержится множество витаминов, микроэлементов и других полезных веществ. Без рыбных блюд кухни многих стран мира просто перестанут существовать или значительно обеднеют. Рыба - это спасительный круг для меланхоликов, так как в ней содержится много фосфора. К тому же некоторые вещества в рыбе притормаживают развитие возрастного слабоумия у пожилых людей. А что там говорить о желающих сбросить лишние килограммы - рыбные блюда являются низкокалорийным продуктом питания.
        </p>
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
          <div class="nine columns"><!-- admitad.banner:     64kokip25d642af9040bfbdf0436a5 Rozetka UA -->
                <a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/64kokip25d642af9040bfbdf0436a5/?i=4"><img width="468" height="60" border="0" src="https://ad.admitad.com/b/64kokip25d642af9040bfbdf0436a5/" alt="Rozetka UA"/></a>
                <!-- /admitad.banner -->
                </div>
        </div> <!-- primary end-->
      
      <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(page); ?>
	          	
	          	<div><!-- admitad.banner: 3rxqyorpse642af9040b16525dc3e8 Aliexpress WW -->
<a target="_blank" rel="nofollow" href="https://alitems.com/g/3rxqyorpse642af9040b16525dc3e8/?i=4"><img width="200" height="300" border="0" src="https://ad.admitad.com/b/3rxqyorpse642af9040b16525dc3e8/" alt="Aliexpress WW"/></a></div>
<!-- /admitad.banner --></br>
<div><a href="https://ad.admitad.com/g/1e8d114494642af9040b16525dc3e8/?i=5&f_id=15830&ulp=https%3A%2F%2Fs.click.aliexpress.com%2Fe%2F_so43EG%3Fhot_product%3D1" target="_parent"><img src="https://ae01.alicdn.com/kf/H4838af49cb9e47e5a9cc77732492025dS/Long-Handle-Home-Kitchen-Steel-Wire-Ball-Pot-Dish-Cleaning-Brush-Washing-Tool.jpg_220x220.jpg"/><span style="display:block;">Long Handle Home Kitchen Steel Wire Ball Pot Dish Cleaning Brush Washing Tool</span></a></div>
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
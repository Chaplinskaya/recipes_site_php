<?php 
/*
Template Name: first_meal

*/
?>
<?php get_header(); ?>

<div class="content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
        <div ckass="one_page_text_">
        <h1>Первые блюда</h1>
        <p>Первые блюда подают на обед в начале трапезы - для разогрева аппетита. Это горячие и холодные супы, борщи, овощные или мясные бульоны. На чем только не варят супы: на молоке, рассоле, вине или квасе... Первые блюда бывают солеными и сладкими, заправочными или в виде пюре. Ни одна семья не обходится без первого блюда - оно всегда обязательно присутствует на обеденном столе.</p>
        </div>
        <div id="primary-main-two" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-halves cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 27,
            'post_type'   => 'first_meal',
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
<!-- /admitad.banner -->
                </div>
        </div> <!-- primary end-->
      <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(page); ?>
	          	<div class="nine columns">
	          	<!-- admitad.banner: s797c4wyar642af9040b16525dc3e8 Aliexpress WW -->
<a target="_blank" rel="nofollow" href="https://alitems.com/g/s797c4wyar642af9040b16525dc3e8/?i=4"><img width="320" height="480" border="0" src="https://ad.admitad.com/b/s797c4wyar642af9040b16525dc3e8/" alt="Aliexpress WW"/></a>
<!-- /admitad.banner -->
	          	</div>
	          	</br>
	          	<div>
	          	<!-- admitad.banner: obe8z9n6py642af9040b16525dc3e8 Aliexpress WW -->
            <a target="_blank" rel="nofollow" href="https://alitems.com/g/obe8z9n6py642af9040b16525dc3e8/?i=4"><img width="600" height="90" border="0" src="https://ad.admitad.com/b/obe8z9n6py642af9040b16525dc3e8/" alt="Aliexpress WW"/></a>
            <!-- /admitad.banner -->
	          	</div>
	          	</br>
	          	
	          	<div>
	          	    <!-- admitad.banner: w8ukq01dyc642af9040be6dcee139a Альфа-Банк [CPL] UA --><a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/w8ukq01dyc642af9040be6dcee139a/?i=4"><img width="500" height="500" border="0" src="https://ad.admitad.com/b/w8ukq01dyc642af9040be6dcee139a/" alt="Альфа-Банк [CPL] UA"/></a>
            <!-- /admitad.banner -->
            </div>
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
<?php
/*
Template Name: страница для page-children
Template Post Type: first_meal, second_meal, bakery, fish, children, relevant_posts, relevant_children, smallkalory, relevant_newyear, post
*/
?>
<?php get_header(); ?>

<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
       
       <div class="children_title">
           <h1>Детские рецепты</h1>
            
            <div class="text_children">
            <p>Приготовить вкусное блюдо по детскому рецепту - ответственное и кропотливое занятие для всех родителей. Ведь растущему организму нужно много полезных веществ. А дети не всегда любят есть полезную еду, особенно с таким соблазном как сейчас.
            Очень редко можно встретить маму, которая бы похвасталась тем, что ее ребенок ест с удовольствием цветную или брюссельскую капусту))) А еще сложнее приходится семье, в которой ребенок не переносит глютен или лактозу. Тут вообще приходится выкручиваться изо всех сил, придумывая как полноценно и оновременно вкусно накормить своего ребенка.</p>
            </div>
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
<!-- /admitad.banner -->
                </div>
        </div> <!-- primary end-->
      <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(page); ?>
	          	
	          	<div>
	          	    <!-- admitad.banner: s797c4wyar642af9040b16525dc3e8 Aliexpress WW -->
<a target="_blank" rel="nofollow" href="https://alitems.com/g/s797c4wyar642af9040b16525dc3e8/?i=4"><img width="320" height="480" border="0" src="https://ad.admitad.com/b/s797c4wyar642af9040b16525dc3e8/" alt="Aliexpress WW"/></a>
<!-- /admitad.banner -->
	          	</div>
	          	</br>
	          	<div><a href="https://ad.admitad.com/g/1e8d114494642af9040b16525dc3e8/?i=5&f_id=15830&ulp=http%3A%2F%2Fs.click.aliexpress.com%2Fe%2F_sHC3rw%3Fhot_product%3D1" target="_parent"><img src="https://ae01.alicdn.com/kf/Ha49845bf8a5f45deaaf7ed940d7c25b4V/Monkey-Animal-Wall-Decor-Sticker-For-Kids-Room-Bedroom-Planet-Rocket-Height-Measure-Decal-Vinyl-Self.jpg_220x220.jpg"/><span style="display:block;">Monkey Animal Wall Decor Sticker For Kids Room Bedroom Planet Rocket Height Measure Decal Vinyl Self Adhesive Wallpaper Boy Gift</span></a></div>
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
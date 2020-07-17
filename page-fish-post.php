<?php
/*
Template Name: страница для page-fish
Template Post Type: first_meal, second_meal, bakery, fish, children, relevant_posts, relevant_children, smallkalory, relevant_newyear, post
*/
?>
<?php get_header(); ?>

<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
       
       <div class="fish">
           <h1>Рыба</h1>
            
            <div class="text_children">
            <p>Рыба - невероятно полезный продукт. В ней содержится множество витаминов, микроэлементов и других полезных веществ. Без рыбных блюд кухни многих стран мира просто перестанут существовать или значительно обеднеют. Рыба - это спасительный круг для меланхоликов, так как в ней содержится много фосфора. К тому же некоторые вещества в рыбе притормаживают развитие возрастного слабоумия у пожилых людей. А что там говорить о желающих сбросить лишние килограммы - рыбные блюда являются низкокалорийным продуктом питания.</p>
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
        </div> <!-- primary end-->
        <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(page); ?>
	          	<!-- admitad.banner: h5j1f9ncdm642af9040be6dcee139a Альфа-Банк [CPL] UA -->
<a target="_blank" rel="nofollow" href="https://ad.admitad.com/g/h5j1f9ncdm642af9040be6dcee139a/?i=4"><img width="120" height="600" border="0" src="https://ad.admitad.com/b/h5j1f9ncdm642af9040be6dcee139a/" alt="Альфа-Банк [CPL] UA"/></a>
<!-- /admitad.banner -->
	        </div> <!-- Secondary End-->
      
</div>

      </section> <!-- end section -->
    
    </div> <!-- #page-content end-->
  </div> <!-- content End-->

<!-- Tweets Section
   ================================================== -->
<!--<section id="tweets">
  <div class="row">
    <div class="tweeter-icon align-center">
      <i class="fa fa-twitter"></i>
    </div>
    <ul id="twitter" class="align-center">
      <li>
        <span>
          This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
          Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
          <a href="#">http://t.co/CGIrdxIlI3</a>
        </span>
        <b><a href="#">2 Days Ago</a></b>
      </li>
      --> 
      <!--
      <li>
        <span>
          This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
          Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
          <a href="#">http://t.co/CGIrdxIlI3</a>
        </span>
        <b><a href="#">3 Days Ago</a></b>
      </li>
      -->
    <!--</ul>
    <p class="align-center"><a href="#" class="button">Follow us</a></p>
  </div>
</section> --> <!-- Tweet Section End-->

<!-- footer
================================================== -->
   <?php get_footer(); ?>
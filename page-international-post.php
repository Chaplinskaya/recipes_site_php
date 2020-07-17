<?php
/*
Template Name: страница для page-international
Template Post Type: first_meal, second_meal, bakery, fish, children, relevant_posts, relevant_newyear, relevant_cake, relevant_children, christmas, cake, azeton, chehia, germany, georgia, international, post
*/
?>
<?php get_header(); ?>

<div class="works-item content-outer">
  <div id="page-content" class="row portfolio">
    <section class="entry cf">
      <div class="twelve columns align-center">
        <div class="dieta_title"><h1>Кухня</h1></div>
    
        <div id="primary-main" class="twelve columns portfolio-list">
          <div id="portfolio-wrapper" class="bgrid-thirds cf">
            <?php
            //параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 18,
            'post_type'   => 'international',
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
           
          </div>
        </div> <!-- primary end-->
      
</div>

      </section> <!-- end section -->
    </div> <!-- #page-content end-->
  </div> <!-- content End-->

<<!-- Tweets Section
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
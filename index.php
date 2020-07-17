
<?php 
if (is_home() )
	{get_header('home');
}
elseif (is_404() )
{
	get_header('404');
}
else {
get_header(); 
}
?>
<section id="intro">
   
  <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">
    <div id="carousel" class="flexslider">
    <script type="text/javascript">
      $ = jQuery;
      
      (function() {
      // store the slider in a local variable
      var $window = $(window),
        flexslider = { vars:{} };
 
      // tiny helper function to add breakpoints
      function getGridSize() {
      return (window.innerWidth < 600) ? 2 :
           (window.innerWidth < 900) ? 3 : 4;
      }
      $(function() {
        SyntaxHighlighter.all();
      });
    $window.load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      animationLoop: false,
      itemWidth: 300,
      itemMargin: 3,
      dots: false,
      minItems: getGridSize(), // use function to pull in initial value
      maxItems: getGridSize() // use function to pull in initial value
    });
  });
 
  // check grid size on resize event
  $window.resize(function() {
    var gridSize = getGridSize();
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
    });
  }());
    </script>
    
  <ul class="slides">
  
    <?php
      global $post;
      $args = array( 'numberposts' => -1, 'post_type' => 'slider');
      $myposts = get_posts( $args );
      foreach($myposts as $post){ setup_postdata($post); ?>
            
      <li class="row">
        <div class="slider-image //slider-image-li">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h6 class="align-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
        </div>
      </li> 
        <?php 
        }
        wp_reset_postdata();
        ?>
    </ul>
  </div> 
</div>
</section>   




<section id="works">
  <div class="outer">
    <div id="page-content" class="row portfolio"> 
        <section class="entry cf">
            <div class="twelve columns align-center">
                <h1></h1>
                <div id="primary-main" class="twelve columns portfolio-list">
                    <div id="portfolio-wrapper" class="bgrid-thirds cf">
                        <?php
                          //параметры по умолчанию
                          $posts = get_posts( array(
                          'numberposts' => 6,
                          'post_type'   => 'relevant_newyear',
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
                    <!--<?php the_posts_pagination(); ?>-->
                </div> <!-- primary end-->
           
           <!-- <div id="secondary-two" class="four columns end">
	          	<?php get_sidebar(index); ?>
	          	
	        </div> <!-- Secondary End-->
            
            </div>
            
            <section class="entry cf">
                <div class="twelve columns align-center">
                    <div id="primary-main" class="twelve columns portfolio-list">
                        <div id="portfolio-wrapper" class="bgrid-thirds cf">
                            <h2>Для детей</h2>
                          <?php
                          //параметры по умолчанию
                          $posts = get_posts( array(
                          'numberposts' => 3,
                          'post_type'   => 'relevant_children',
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
            </section>
            
            <section class="entry cf">
                <div class="twelve columns align-center">
                    
                    <div id="primary-main" class="twelve columns portfolio-list">
                        <div id="portfolio-wrapper" class="bgrid-thirds cf">
                          <h2>Популярные темы</h2>
                          <?php
                          //параметры по умолчанию
                          $posts = get_posts( array(
                          'numberposts' => 6,
                          'post_type'   => 'popular',
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
            </section>
        </div>
    </div>
</section>



 <section id="call-to-action">
  <div class="row">
    <div class="twelve columns offset-1">
      <!--<h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Рецепты, которые вам понравится готовить!</a></h1>-->
      <p>Новые рецепты каждую неделю. Рецепты для всей семьи 2018-2020</p>
     <!--<a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
			Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>. -->
			<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --></p>
    </div>
    <!--<div class="three columns action">
      <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>
    </div>-->
  </div>
  
</section> <!-- Call-To-Action Section End-->


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
   
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
  <div id="intro-slider" class="flexslider">
  
  <script type="text/javascript">
    $ = jQuery;
    $(window).load(function() {
    // The slider being synced must be initialized first
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 210,
      itemMargin: 5,
      asNavFor: '#slider'
    });
 
    $('#slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel"
    });
  });
  </script>
  
  <ul  class="slides">
    <?php
      global $post;
      $args = array( 'numberposts' => -1, 'post_type' => 'slider');
      $myposts = get_posts( $args );
      foreach($myposts as $post){ setup_postdata($post); 
    ?>
        
      <li class="row">
        <div class="twelve columns">
          <div class="slider-text"><h1><?php the_title(); ?></h1></div>
          <div class="slider-image"><?php the_post_thumbnail(); ?></div>
        </div>
      </li> 
      <?php 
        }
        wp_reset_postdata();
        ?>
  </ul>
  </div>
  
  <div id="carousel" class="flexslider">
    <ul class="slides">
      <?php
        global $post;
        $args = array( 'numberposts' => -1, 'post_type' => 'slider');
        $myposts = get_posts( $args );
        foreach($myposts as $post){ setup_postdata($post); ?>
      
        <li class="row">
          <div class="twelve columns">
            <div class="slider-image"><?php the_post_thumbnail(); ?></div>
          </div>
        </li> 
    <!-- items mirrored twice, total of 12 -->
     <?php 
      }
      wp_reset_postdata();
      ?>
    </ul>
  </div>

</section>
   
<section id="works">
    <div class="row">
      <div class="twelve columns align-center">
        <h1>Популярные рецепты</h1>
      </div>

    <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">
        <?php
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => 5,
          'category'    => 0,
          'orderby'     => 'date',
          'order'       => 'DESC',
          'include'     => array(),
          'exclude'     => array(),
          'meta_key'    => '',
          'meta_value'  =>'',
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $posts as $post ){
        setup_postdata($post);
        ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></li>
        <?php
        }
        wp_reset_postdata();
        ?>
    
    </div>

  </div>

   </section> 

   <section id="journal">
      <div class="row">
         <div class="twelve columns align-center">
            <h1>Блюда немецкой кухни</h1>
         </div>
      </div>
      <div class="blog-entries">
      	<?php
      	// параметры по умолчанию
			   $posts = get_posts( array(
				    'numberposts' => 5,
				    'post_type'   => 'post',
				    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			       ) );
          foreach( $posts as $post ){
				  setup_postdata($post);
			    // формат вывода the_title() ...
			    ?>
			    <article class="row entry">
            <div class="entry-header">
              <div class="permalink">
                  <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
              </div>
              <div class="ten columns entry-title pull-right">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              </div>
              <div class="two columns post-meta end">
                  <p>
                    <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_time('F jS, Y'); ?></time>
                    <span class="dauthor"><?php the_author(); ?></span>
                  </p>
               </div>
            </div>
            <div class="ten columns offset-2 post-content">
               <?php the_excerpt(); ?>
               <a class="more-link" href="<?php the_permalink(); ?>">Read More<i class="fa fa-arrow-circle-o-right"></i></a></p>
            </div>
          </article> <!-- Entry End -->
			   <?php   
			   }
			   wp_reset_postdata(); // сброс
			   ?>
         <!-- Entry -->
        <?php the_posts_pagination(); ?>
      </div> <!-- blog-Entries End -->
   </section> <!-- Journal Section End-->
   
   <section id="call-to-action">

      <div class="row">

         <div class="eight columns offset-1">

            <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
            <p>Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>. 
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --></p>

         </div>

         <div class="three columns action">

            <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

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
           
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->

   <!-- footer
   ================================================== -->

   <?php get_footer(); ?>
   
<?php
/*
Template Name: page of first_meal
Template Post Type: first_meal

*/
?>
<?php get_header(page); ?>
 
  
   <!-- Content single
   ================================================== -->
   <div class="content-outer">
      <div id="page-content" class="row">
         <div id="primary" class="eight columns">
            <article class="post">
               <div class="entry-header cf">
                  <h1><?php the_title(); ?></h1>
                  <p class="post-meta">
                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
               
                     <span class="categories">
                     <a href="#">Design</a> 
                     <a href="#">User Inferface</a> 
                     <a href="#">Web Design</a>
                     </span>

                  </p>
               </div>
               <div class="post-thumb">
                  <?php the_post_thumbnail('post_thumb'); ?>f
               </div>
               <div class="post-content">
                 
                  <?php the_content(); ?>    
               </div>
            </article> <!-- post end -->
         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">
          <?php get_sidebar(); ?>
         </div> <!-- Secondary End-->
      </div>
   </div> <!-- Content End-->
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
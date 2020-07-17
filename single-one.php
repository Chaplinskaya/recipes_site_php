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
         </div>
      </div>
   </div> 
   ================================================== -->
   <?php get_footer(); ?>
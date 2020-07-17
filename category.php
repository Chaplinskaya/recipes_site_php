
<?php get_header(); ?>
================================================== -->
   <div class="content-outer">
      <div id="page-content primary-category" class="row"> 
         <div id="primary-category">
            <div id="primary" class="twelve columns">
               <?php if (have_posts()) { while (have_posts()) 
               { the_post(); ?>
            <article class="post post-category-page">
               <div class="entry-header cf">
                  <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
                  <p class="post-meta">
                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
                     </br>
                     <span class="categories">
                        <?php the_category('/ '); ?>
                     </span>
                  </p>
               </div>
               <div class="post-thumb post-thumb-category">
                  <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('post_thumb'); ?></a>
               </div>
               <div class="post-content">
                  <?php the_excerpt(); ?>
               </div>
            </article> <!-- post end -->
               <?php }// end while ?>  
               <?php the_posts_pagination(); ?>
               <?php } //end if ?>
         </div> <!-- Primary End-->
         <div id="secondary" class="four columns end">
            <?php get_sidebar(); ?>
         </div>
      </div>
   </div>
</div> 
================================================== -->
<?php get_footer(); ?>
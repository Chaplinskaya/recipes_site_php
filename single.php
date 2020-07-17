<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
   <div class="content-outer">
      <div id="page-content" class="row">
         <div id="primary" class="eight columns">
            <?php get_template_part('post-templates/post', get_post_format()); ?>
         </div>
         <div id="secondary" class="four columns end">
          <?php get_sidebar(); ?>
         </div>
      </div>
   </div>
 <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
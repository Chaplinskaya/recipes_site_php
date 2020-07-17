<?php get_header(); ?>
 <div class="content-outer">
   	<div id="page-content" class="row">
        <div id="primary-page-one" class="twelve columns">
            
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                
                
                <article class="post post-one-page post-search">
               	<div class="entry-header cf">
                  	<h1 class="text-center"><?php the_title(); ?></h1>
                  	<p class="post-meta">
                  <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
                   
                  </br>
                  <span class="categories">
                     <?php the_category('/ '); ?>
                  </span>
               </p>
               
               	</div>
               	<div class="post-thumb post-img">
                  <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('post_thumb'); ?></a>
               </div>
               <div class="post-content">
                  <?php the_excerpt(); ?>
               </div>
            </article> 
                
                
                <?php endwhile; else: ?>
                <p>Поиск не дал результатов.</p>
             <?php endif;?>
            <div id="secondary-search" class="four columns end">
	          	<?php get_sidebar(); ?>
	        </div> <!-- Secondary End-->
	    
	    </div>
	</div> 
</div>
 <?php get_footer(); ?>
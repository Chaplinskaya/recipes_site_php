<?php 
/*
Template Name: portfolio
*/
?>
<?php get_header(); ?>
   <div class="content-outer">
      <div id="page-content" class="row portfolio">
         <section class="entry cf">
            <div id="secondary"  class="four columns entry-details">
               <h1></h1>
            </div> 
            <div id="primary" class="eight columns portfolio-list">
               <div id="portfolio-wrapper" class="bgrid-halves cf">
                  <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
                  <div class="columns portfolio-item">
                     <div class="item-wrap">
                        <a href="<?php the_permalink() ?>">
                           <?php the_post_thumbnail(); ?>
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                           <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                           <p><?php the_excerpt(); ?></p>
                        </div>
                     </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
               </div>
            </div>
         </section>
      </div>
   </div>
   <?php get_footer(); ?>
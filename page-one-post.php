<?php
/*
Template Name: страница для page-one
Template Post Type: first_meal, second_meal, bakery, fish, children, christmas, gluten, cocktail, christmas12, cake-child, azeton, relevant, relevant_newyear, relevant_post, dieta, chehia, germany, georgia, international, shteba, popular, gluten, salat, indeika, kurica, telyatina, smallkalory, post, breakfast, gluten_allergy, porridge, valentin, slider
*/
?>
<?php get_header(); ?>
<!-- Content single
================================================== -->
<div class="content-outer">
   	<div id="page-content" class="row">
        <div id="primary-page-one" class="twelve columns">
            <?php if (have_posts()) { while (have_posts()) 
               { the_post(); ?>
            
            <div id="secondary" class="four columns end">
                <div class="home_page2">
                    <?php get_sidebar(home); ?>
                    </br>
                </div>
            </div>
            <article class="post post-one-page">
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
                  <?php the_post_thumbnail(); ?>
               </div>
               <div class="post-content">
                 <?php the_content(); ?>
                </div>
                </br>
            </article> <!-- post end -->
            <?php }// end while ?>    
            <?php } //end if ?>
	         <!-- Primary End-->	
			<div id="secondary" class="four columns end">
	          	<div class="home_page">
                 <?php query_posts('showposts=15'); ?>
                 <?php while (have_posts()) : the_post(); ?>
                  <table>
                     <tr>
                       <td><a onclick="return !window.open(this.href)" href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail');?><?php the_title();?></br></a>
                            
                        </td>
                        </tr>
                     </table> 
                    <?php endwhile; ?>
                    </div>
                </div> 
            </div><!-- Secondary End-->
				<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}?>
        <div class="respond-com">
            
            <?php comment_form(); ?>
        </div>
    </div><!--Primary end-->
</div>
================================================== -->
<section id="tweets" class="twelve columns">
	<div class="">
	    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
	</div>
</section>
<?php get_footer(); ?>
<?php
/*
Template Name: christmas
Template Post Type: first_meal, second_meal, bakery, fish, children, post, relevant_posts, christmas, breakfast
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
            <article class="post post-one-page">
               	<div class="entry-header cf">
                  	<h1 class="text-center"><?php the_title(); ?></h1>
                  	<p class="post-meta">
                     	<time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
					</p>
					<span class="categories">
                    	<a href="#">Design/</a>
                    	<a href="#">User Inferface/</a>
                    	<a href="#">Web Design</a>
                    </span>
                    <p class="post-meta">
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
            </article> <!-- post end -->
	        <?php }// end while ?>
			<?php } //end if ?>
	         <!-- Primary End-->
			<div id="secondary" class="four columns end">
	          	<?php get_sidebar(); ?>
	        </div> <!-- Secondary End-->
	    </div>
	</div> 
</div>
<!-- Content End-->
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
<?php
/*
Template Name: page of first_meal
Template Post Type: first_meal, post

*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<!-- Page Title
   ================================================== -->
  
   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

                  <h5><?php the_title() ?></h5>

                  <div class="entry-description">

                     <p>Prommmin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                     nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                     cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                     ornare odio.</p>

                  </div>

                  <ul class="portfolio-meta-list">
						   <li><span>Date: </span><?php the_field('date_project') ?></li>
						   <li><span>Client </span><?php the_field('client') ?></li>
						   <li><span>Skills: </span><?php the_terms( get_the_ID(), 'skills', '', ' / ', '' ); ?></li>
				      </ul>

                  <a class="button" href="http://behance.net">View project</a>

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">

               <div class="entry-media">

                  <img src="<?php the_field('photo') ?>" alt="" />


                  <!--<img src="images/portfolio/entries/geometric-backgrounds-02.jpg" alt="" />-->

               </div>

               <div class="entry-excerpt">

				      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                  nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                  cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>

					</div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

         <ul class="post-nav cf">
			   <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
				<li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
			</ul>

      </div>

   </div> <!-- content End-->

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
   
    <?php endwhile; ?>
	<?php endif; ?><!-- footer
   ================================================== -->
   <?php get_footer(); ?>
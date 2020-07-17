
<?php
/*
Template Name: Contacts
Template Post Type: post, page
*/
?>

<!-- html код шаблона -->

<?php get_header(); ?>
================================================== -->
   <div class="content-outer">
      <div id="page-content" class="row page">
         <div id="primary" class="eight columns">
            <section>
              <h1>Привет. Напишите мне.</h1>

              <p class="lead"></p>

              <p> </p>

              <div id="contact-form">
                  <?php echo do_shortcode( '[ninja_form id=2]' ) ?>
                  <!-- contact-warning -->
                  <div id="message-warning"></div>
                  <!-- contact-success -->
      				<div id="message-success">
                     <i class="icon-ok"></i>Your message was sent, thank you!<br />
      				</div>
               </div>
            </section> <!-- section end -->
         </div>
         <div id="secondary-contact" class="four columns end">
            <aside id="sidebar">
               <div class="widget widget_search">
                  <h5>Search</h5>
                  <form action="#">
                     <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
                     <input type="submit" class="submit-search" value="">

                  </form>
               </div>
               <div class="widget widget_text">
                  <h5 class="widget-title">Text Widget</h5>
                  <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                  nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                  a sit amet mauris. Morbi accumsan ipsum velit. </div>
		         </div>
               <div class="widget widget_contact">
					   <h5>Address and Phone</h5>
					   <p class="address">
						   Sparrow Studio<br>
						   1600 Amphitheatre Parkway <br>
						   Mountain View, CA 94043 US<br>
						   <span>(123) 456-7890</span>
					   </p>
					   <h5>Email and Social</h5>
					   <p>
                     E-mail: info{@}sparrow.com<br>
                     Twitter: <a href="#">@sparrow</a><br>
                     Facebook: <a href="#">sparrow FB page</a><br>
                     Google+: <a href="#">sparrow G+ page</a>
                  </p>
				   </div>
               <div class="widget widget_photostream">
                  <h5>Photostream</h5>
                  <ul class="photostream cf">
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                  </ul>
	            </div>
            </aside>
         </div>
      </div>
   </div> <!-- Content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets" class="twelve columns">
	<div class="">
	    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
	</div>
</section>
<!-- footer-->
   <?php get_footer(); ?>
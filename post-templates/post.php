<article class="post">
   <div class="entry-header cf">
      <h1><?php the_title(); ?></h1>
      <p class="post-meta">
         <time class="date" datetime="<?php the_time('F jS, Y'); ?>"></time>
          <span class="categories">
            <a href="#">Design/</a> /
            <a href="#">User Inferface</a> /
            <a href="#">Web Design</a>
          </span>
          </p>
   </div>
   <div class="post-thumb">
       <?php the_post_thumbnail(); ?>
    </div>
    <div class="post-content">
      <?php the_content(); ?>
    </div>
</article> <!-- post end -->
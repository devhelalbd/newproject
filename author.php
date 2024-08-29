<?php get_header(); ?>


<div class="single-blog-post">
     <div class="single-post-content">
        
          <h4>Posts By:<?php the_author(); ?></h4>
          <?php get_template_part('template-parts/content', 'blogs'); ?>
     </div>
     <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
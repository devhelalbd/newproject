<?php get_header(); ?>


<div class="single-blog-post">
     <div class="single-post-content blog-left">
        
          <h4>Posts By:<?php the_author(); ?></h4>
          <div class="author-info">
               <p>Description: <?php the_author_meta('description'); ?></p>
               <p><b>Email:</b> <?php the_author_meta('email'); ?></p>
               <p><b>Display Name:</b> <?php the_author_meta('display_name'); ?></p>
          </div>

          <?php get_template_part('template-parts/content', 'blogs'); ?>
     </div>
     <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
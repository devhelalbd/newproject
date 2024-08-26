<?php get_header(); ?>


<div class="single-blog-post">
     <div class="single-post-content">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          <h4><?php the_title(); ?></h4>
          <?php the_content(); ?>
     </div>
     <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
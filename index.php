<?php get_header(); ?>


<div <?php post_class(array('single-blog-post')); ?>>
   <div class="search">
      <?php get_search_form(); ?>
   </div>
     <div class="single-post-content blog-left">
        <?php get_template_part('template-parts/content', 'blogs') ?>
     </div>
     <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
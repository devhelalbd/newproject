<?php get_header(); ?>


<div class="single-blog-post">
     <div class="single-post-content blog-left">
     <h4>Posts By: <?php single_cat_title(); ?></h4>
        <?php get_template_part('template-parts/content', 'blogs') ?>
     </div>
     <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
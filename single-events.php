<?php get_header(); ?>

<div class="box">
     <img src="<?php the_post_thumbnail_url(); ?>" alt="">
     <div class="h4"><?php the_title(); ?></div>
     <?php the_content(); ?>
</div>

<?php get_footer(); ?>
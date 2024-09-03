<?php

/*

Template Name: Template Home 2

 */

get_header(); ?>

       
<div class="content">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'rand'
        );
        $query = new WP_Query($args);

        while($query -> have_posts()){
            $query -> the_post();
        ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php
        }
    ?>
</div>


<?php get_footer(); ?>


   
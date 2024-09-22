<?php

/*

Template Name: Template Home 2

 */

get_header(); ?>

       
<div class="content">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,

            // query compare in blog post 

            // 'meta_compare' => '=',
            // 'meta_value' => '3',
            // 'meta_value' => 'john',
            // 'meta_key' => 'name'

            // query in blog post using post category
            // 'category_name' => 'book'

            //meta query
            // 'meta_query' => array(
            //     'relation' => 'OR',
            //     array(
            //         'key' => 'size',
            //         'value' => 'b',
            //         'compare' => '='
            //     ),
            //     array(
            //         'key' => 'price',
            //         'value' => '100',
            //         'compare' => '<'
            //     )
            // )

            // tax query
            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'book',
                    'operator' => 'IN'
                ),
                array(
                    'taxonomy' => 'tag',
                    'field' => 'slug',
                    'terms' => 'song'
                )
            )
        );
        $query = new WP_Query($args);

        while($query -> have_posts()){
            $query -> the_post();
        ?>
            
            <div>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p>Price: <?php the_field('price'); ?></p>
                <p>Size: <?php the_field('size'); ?></p>
                <p>Color: <?php the_field('color'); ?></p>

            </div>
        <?php
        }
    ?>
</div>


<?php get_footer(); ?>


   
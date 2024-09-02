<?php get_header(); ?>



<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

    <ul class="search-reslut-post">    
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
        <div class="single-blog ">
                         <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                         <!-- <?php //the_post_thumbnail(); ?> -->
                         <img class="post-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="Service 1">
                         <div class="blog-meta">
                              
                              <?php the_author_posts_link(); ?>
                              <a href=""><?php the_date('M d'); ?></a>
                              <?php the_category(); ?>
                         </div>
                         <p><?php the_excerpt(); ?></p>
                         <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
        </li>   
    <?php endwhile; ?>
    </ul>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
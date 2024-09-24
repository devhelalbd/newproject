<?php get_header(); ?>

<div class="event-category">
     <h1><?php echo single_cat_title(); ?></h1>
</div>

<div class="events">
        <?php 
            


            while(have_posts()){
                the_post();
                ?>
                    <div class="single-event">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <h4><?php the_title(); ?></h4>
                        <div class="meta">
                            <ul>
                                <li><i class='fas fa-map-marker-alt'></i><?php the_field('location') ?></li>
                                <li><i class='far fa-calendar-check'></i><?php the_field('date') ?></li>
                                
                            </ul>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                <?php
            }
        ?>
    
    </div>

<?php get_footer(); ?>
<div class="blog-post">


     <?php 
          if(have_posts()){
               while(have_posts()){
                    the_post();
               ?>
                    <div class="single-blog">
                         <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                         <!-- <?php //the_post_thumbnail(); ?> -->
                         <img class="post-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="Service 1">
                         <div class="blog-meta">
                              
                              <?php the_author_posts_link(); ?>
                              <a href=""><?php the_date(); ?></a>
                              <a href=""><?php the_category(); ?></a>
                         </div>
                         <p><?php the_excerpt(); ?></p>
                         <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
               <?php
               }
          }
     ?>


     
</div>
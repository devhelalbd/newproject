<?php get_header(); ?>

        <!-- Banner Start Here -->
        <div class="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bannar.jpg" alt="Banner">
        </div>
        <!-- Banner End Here -->
        
        <!-- Services Start Here -->
        <?php get_template_part('template-parts/content', 'services') ?>
        <!-- Services End Here -->
        
        <!-- About Start Here -->
        <div class="about fix" id="about">
            
        <?php get_template_part('template-parts/content', 'about') ?>

            <!-- Sidebar Start Here -->

            <?php get_sidebar(); ?>

            <!-- Sidebar End Here -->

        </div>
        <!-- About End Here -->

        <?php get_template_part('template-parts/content', 'blogs') ?>


        <!-- Start Footer Here -->

        <?php get_footer(); ?>

        <!-- Footer End Here -->

   
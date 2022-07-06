<?php get_header(); ?>
<main>
    <div class="page-container">
        <div class="container">
        <?php if(have_posts()) :
            while(have_posts()) :
                the_post();
        ?>
        
        <div class="content">
         <h2><?php the_field('page_title'); ?></h2>   
        <?php the_content(); ?>
        <?php endwhile;
        endif;
        ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>
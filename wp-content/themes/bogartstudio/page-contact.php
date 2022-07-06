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
         <div class="contact-me-meta">
        <p style="font-weight:bold"><?php the_field('studio_name'); ?></p>
        <p><?php the_field('studio_location'); ?></p>
        <p><?php the_field('studio_phone'); ?></p>
        <p>E-mail: <?php the_field('studio_email'); ?></p>
        </div>
        <?php the_content(); ?>
        <?php endwhile;
        endif;
        ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>
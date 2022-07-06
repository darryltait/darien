<?php get_header(); ?>
<main>
    <div class="page-container">
        <div class="container">
        <?php if(have_posts()) :
            while(have_posts()) :
                the_post();
        ?>
        
        <div class="content">
            <div class="about-head">
                <!-- <h2><?php the_field('page_title'); ?></h2>    -->
                <div class="about-head-subhead">

            <?php the_post_thumbnail('thumbnail', (array(
                'id' => 'about-mug',
            ))); ?>
         <p class="subhead">&ldquo;<?php the_field('subhead'); ?>&rdquo;</p>   
         </div>
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
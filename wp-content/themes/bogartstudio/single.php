<?php get_header(); ?>

<div class="blog-pg-container">
    <div class="blog-post-item">
<?php
while(have_posts()) : the_post();
?>
<?php the_post_thumbnail('medium_large', array('class'=>'single-blog-img')); ?>
<h2 class="blog-title"><?php the_title(); ?></h2>
<p class=""><?php the_content(); ?></p>

<!-- <div class="hp-blog-item-info">

<p><?php the_field('show_name'); ?></p>
    <?php the_field('show_date_start'); ?> <?php the_field('show_date_end'); ?></p>
    <p><?php the_field('show_location'); ?></p>
    <p><?php the_field('show_info'); ?></p>
</div> -->

<div class="row other-blog-links">
                            <div class="pages col-6 text-start"><?php next_post_link( '&laquo; %link'); ?></div>
                            <div class="pages col-6 text-end"><?php previous_post_link('%link &raquo;'); ?></div>
                        </div>

<?php endwhile; 
posts_nav_link(); ?>

</div>
</div>



<?php get_footer(); ?>
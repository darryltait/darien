<?php
/**
 * Template Name: Events page
 */


get_header(); 

?>


    <main>
        <div class="page-container ">
        <div class="container">
            <div class="content">


   <h2>Upcoming Events</h2>

   
    <?php custom_post_type_events(); ?>

<?php
$args = array(
    'post_type' => 'events',
    
    'posts_per_page' => 20,
);

$the_events = new WP_Query( $args );
?>


<?php 
    if( $the_events->have_posts() ) : 
        while( $the_events->have_posts()) :
            $the_events->the_post();
?>


<div class="col-sm-12 ">
<div class="event-info">

<a href="<?php the_field('show_url'); ?>" target="_blank"><?php the_post_thumbnail('medium', array(
        'id' => 'show-logo',
    )); ?> </a>

    
    <a href="<?php the_field('show_url'); ?>" target="_blank"><h3 class="show-title"><?php the_title(); ?></h3></a>
    <p class="event-date"><?php the_field('show_date_start'); ?> <?php the_field('show_date_end'); ?></p>
    <p><?php the_field('show_location'); ?></p>
    <!-- <p class="event-details"><?php the_field('show_info'); ?></p> -->
    <!-- <p class=""><?php the_content(); ?></p> -->
    <!-- <a href="<?php the_field('show_url'); ?>" target="_blank"><p class="show-url">Show info</p></a> -->

</div>   
    

<?php endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif; ?>
</div>
</div>

</div>
</div>
    </main>





<?php get_footer(); ?>
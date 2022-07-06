<?php get_header(); ?>


<main>
<div class="page-container">
        
            <div class="content">
            <h2><?php the_field('page_title'); ?></h2>
            </div>

<?php custom_post_type_paintings(); ?>

<?php
$args = array(
    'post_type' => 'paintings',
    'category_name' => 'portrait-collection',
    
    'posts_per_page' => 50,
);

$the_paintings = new WP_Query( $args );
?>

    <div class="paintings-shell">
    <?php 
        if( $the_paintings->have_posts() ) : 
            while( $the_paintings->have_posts()) :
                $the_paintings->the_post();
    ?>

        <div class="painting-container">
    
                <div class="painting-box">
                <span class="vhelper"></span>

                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium' ); ?>
                </a>
                </div>
            <div class="painting-text">
            <a href="<?php the_permalink(); ?>"><p class="title"><?php the_title(); ?></p></a>
            </div>

        </div>

<?php endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif; ?>
</div>


</div>
</main>

<?php get_footer(); ?>
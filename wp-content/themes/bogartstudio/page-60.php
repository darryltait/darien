<?php get_header(); ?>

<div class="content-area">
    <main>
        <div class="image-bar">
        </div>
        <div class="container">

    <?php custom_post_type_paintings(); ?>

<?php
$args = array(
    'post_type' => 'paintings',
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

<?php the_post_thumbnail( 'fullSize' ); ?>
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
</div>





<?php get_footer(); ?>
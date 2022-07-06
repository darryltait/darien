<?php get_header(); ?>

<?php
while(have_posts()):
    the_post();
?>

<?php the_title(); ?>
<?php the_post_thumbnail('thumbnail'); ?>

<?php
endwhile;
?>

<?php get_footer(); ?>
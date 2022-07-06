<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

 get_header(); ?>
 <main>
<!-- <div class="blog-pg-container"> -->
    <div class="page-container">
<div class="container">
    <!-- <div class="blog-pg-content"> -->
        <div class="content">
        <h2 class="blog-page-title">BLOG</h2>
        <!-- <div class="blog-posts"> -->
    <div class="row blog-content">
        <?php
        // first loop
        $blogitem = new WP_Query('post_type=post&posts_per_page=1');
if ($blogitem->have_posts()): while ($blogitem->have_posts()): $blogitem->the_post();
?>
   <div class="col-12">
   
    <div class="thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large', array('class' => 'img-fluid' )); ?>
                                </a>
                               
                            </div>
                            <a href="<?php the_permalink(); ?>">
                            <h3 class="blog-item-title"><?php the_title(); ?></h3>
                            </a>
                            
                            <div class="meta-info">
                                <!-- Below was commented / remove when archive page fixed -->
                                <p><span><?php the_author_posts_link(); ?></span></p>
                                <!-- end of commented out author / link -->
                               
                       
                                <?php echo get_the_date(); ?>

                            </div>
                            
                            <div class="blog-item-desc-primary">
                           
                                <?php the_excerpt(); ?>
                            </div>
                            </div>

<?php
endwhile;
wp_reset_postdata();
endif;

// second loop
$args = array(
    'post_type' => 'post',
    'offset' => 1,
    'cat' => -7
);
$secondary = new WP_Query( $args );
if($secondary->have_posts()) : while($secondary->have_posts()) :
    $secondary->the_post();
?>
<div class="col-sm-6 col-lg-4 blog-secondary">

<div class="thumbnail">
<a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large', array('class' => 'img-fluid' )); ?>
                                </a>
                            </div>
                            <a href="<?php the_permalink(); ?>"><h3 class="blog-item-title"><?php the_title(); ?></h3></a> 
                            
                            <div class="meta-info">
                            <!-- <p><?php the_author() ; ?></p> -->
                                  
                               <?php echo get_the_date(); ?>

                            </div>
                            <div class="blog-item-desc"><?php the_excerpt(); ?></div>
</div>
<?php endwhile;
wp_reset_postdata();
endif;
?>

</div>
  <div class="row">
                            <div class="pages col-md-6 text-left">
                                <?php previous_posts_link( __("<< Newer posts",'learnwp') ); ?>
                            </div>
                            <div class="pages col-md-6 text-right">
                                <?php next_posts_link( __("Older posts >>",'learnwp') ); ?>
                            </div>
                        </div>


</div>
</div>
</div>

</div>
</main>
<?php get_footer(); ?>
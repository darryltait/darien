<?php get_header(); ?>

    <main>
        <div class="page-container ">
        <div class="container">
            <div class="content">


   <h2>Collector's Photos</h2>

   <?php custom_post_type_photos(); ?>

<?php
$args = array(
    'post_type' => 'photos',
    
    'posts_per_page' => 20,
);

$the_photos = new WP_Query( $args );
?>


<?php 
    if( $the_photos->have_posts() ) : 
        while( $the_photos->have_posts()) :
            $the_photos->the_post();
?>


<div class="col-sm-12">
    <div class="client-photos">
<div class="photos-box">








<!-- <img src="<?php echo (get_field("photo-2")) ;?>" alt="" class="photos-client"> -->
<?php
$image1 = get_field('photo-1');
$size = 'medium'; 
$picture1 = $image1; ?>




<?php if($image1): ?>
<img src="<?php echo($picture1); ?>"  class="photos-client" alt="">
<?php endif; ?>

<?php
$image2 = get_field('photo-2'); 
$picture2 = $image2; ?>

<?php if($image2): ?>
<img src="<?php echo($picture2); ?>"  class="photos-client" alt="">
<?php endif; ?>

<?php
$image3 = get_field('photo-3'); 
$picture3 = $image3; ?>

<?php if($image3): ?>
<img src="<?php echo($picture3); ?>"  class="photos-client" alt="">
<?php endif; ?>

 </div>
<div class="photos-info">

    <!-- If you want to add a comment by the owner of painting -->
<!-- <div class="photos-comment">
      <?php if(the_field('comment')) : { ;?>
        
        <p class=""><?php the_field('comment'); ?></p>
        <?php
        }; endif; 
        ?>
        </div> -->
    <!-- to add comment by owner, use above -->
    
<div class="photos-city">

    <?php if(the_field('city')) : { ;?>
        
    <p class=""><?php the_field('city'); ?></p>
    <?php
        }; endif; 
        ?>
   
    </div>
   
  
       
        </div>
</div>   
    

<?php endwhile;

?>
<?php
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
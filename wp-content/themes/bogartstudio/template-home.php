<?php
/*
Template Name: Home Page

*/
?>
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
 * @package Bogart Studio
 
 */
?>
<?php get_header('home'); ?>
    <main>
    


                <!-- NEW FEATURED COLLECTION -->

                <!-- <div class="new-featured">
                    <div class="collection-info">
                    <p><?php echo get_theme_mod('set_featured_title', 'Featured title here'); ?></p>
                    <h5 class="featured-header"><?php echo get_theme_mod('set_featured_collection', 'Featured collection here') ; ?> COLLECTION</h5>
                    </div>
                    <?php custom_post_type_paintings(); ?>

<?php
$args = array(
    'post_type' => 'paintings',
    'meta_key' => 'size',
    'meta_value' => get_theme_mod('set_featured_collection', 'Featured collection here'),
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
        <?php the_post_thumbnail( 'medium',
    array('class' => 'img-fluid') ); ?>
        </a>
    </div>
    <div class="painting-text">
        <a href="<?php the_permalink(); ?>"><p class="title-featured"><?php the_title(); ?></p></a>
        <p class="price-featured">$<?php the_field('price'); ?></p>
    </div>
        </div>


<?php endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif; ?>
</div>
    </div> -->

    <!-- END FEATURED COLLECTION -->
<!--  ------------------------------------------------------------------- -->
    <!-- ALL PRODUCTS SECTION: ORIGINALS / PRINTS / BLOG-EVENTS -->
    
    <!-- <div class="testt">
        <img src="<?php echo home_url(); ?><?php echo the_field('my_work_originals'); ?>" alt="">
        <div class="testt-text">
        <a href="originals"><button class="box black-box-btn">ORIGINALS</button></a>
        </div>
        
   </div>
    <div class="testt2">
        <img src="<?php echo home_url(); ?><?php echo the_field('my_work_print_store'); ?>" alt="">
        <div class="testt-text">
        <a href="originals"><button class="box black-box-btn">Print Store</button></a>
        </div>
        
   </div>
    <div class="testt3">
        <img src="<?php echo home_url(); ?><?php echo the_field('my_work_blogevents'); ?>" alt="">
        <div class="testt-text">
        <a href="originals"><button class="box black-box-btn">Blog / Events</button></a>
        </div>
        
   </div> -->
   
    
   

    <div class="all-products">
    <!-- <a href="originals"><button class="black-box-btn">View all products</button></a> -->
    <h3 class="my-work">MY WORK</h3>
    </div>

    <div class="collections">

<!-- ORIGINALS -->
<div class="collection-box">
<!-- <a href="originals"> -->
<div class="box1">
        
        <a href="originals"><button class="box black-box-btn">ORIGINALS</button></a>
</div>
<!-- </a> -->
</div>

        
     
    
     

<!-- PRINTS -->

<div class="collection-box">
    <a href="https://darien-bogart.pixels.com" target="_blank"> 
    <div class="box2">
    <a href="https://darien-bogart.pixels.com" target="_blank"><button class="box black-box-btn">PRINT STORE</button></a>
</div>
</a>
</div>

<!-- BLOG / EVENTS -->
<div class="collection-box">
<a href="blog">
<div class="box3">
<a href="blog"><button class="box black-box-btn">BLOG/EVENTS</button></a>
</div>
</a>
</div>


</div>


<!-- END ALL PRODUCTS SECTION: ORIGINALS / PRINTS / BLOG-EVENTS -->

<!--  ----------------------------------------------------------------- -->

<!-- ARTIST BLOCK -->

<!-- <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/02/mugfront.jpg" alt=""> -->

<div class="artist-block"> 

    <!-- <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/02/mugfront.jpg" alt=""> -->
    <div class="artist-block-info">
        <h3 class="name"><?php the_field('homepage_bio_name'); ?></h3>
        <p class="blurb"><em><?php the_field('homepage_bio_text'); ?></em></p>
        <!-- <a href="about"><button class="box"><?php the_field('homepage_bio_button'); ?></button></a> -->
    </div>
    
</div>  
<div class="artist-block-mobile">
    <!-- <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/02/mugfront.jpg" alt=""> -->
    <div class="artist-block-mobile-info">
        <h3 class="name artist-block-info-mobile"><?php the_field('homepage_bio_name'); ?></h3>
        <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/03/mugfront_mobile.jpg" alt="artist photo" class="artist-block-mug-mobile">
        <p class="artist-block-info-mobile-blurb"><?php the_field('homepage_bio_text'); ?></p>
        <!-- <a href="about"><button class="box"><?php the_field('homepage_bio_button'); ?></button></a> -->
    </div>
    
</div>  



<!--  END ARTIST BLOCK -->

<!--  ----------------------------------------------------- -->

<!-- RECENT PAINTING BLOCK -->

<div class="new-work-container container">
        <h3 class="recent-title">Recent Painting</h3>
        <!-- <h3 class="fresh-work">Fresh from Easel</h3> -->
        <div class="new-painting-container">
            <!-- <div class="new-painting-box"> -->
            <?php
$args = array(
    'post_type' => 'paintings',
    
    'posts_per_page' => 1,
    'orderby' => '',
);

$the_painting = new WP_Query( $args );
?>

<!-- <div class="paintings-shell"> -->
<?php 
    if( $the_painting->have_posts() ) : 
        while( $the_painting->have_posts()) :
            $the_painting->the_post();
?>

<!-- <div class="painting-container"> -->
    
    <!-- <div class="painting-box"> -->
        <!-- <span class="vhelper"></span> -->

        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium', array(
            'class' => '',
        ) ); ?>
        </a>

       



<!-- </div> -->
<div class="new-painting-info">
    <p class="title">&ldquo;<?php the_title(); ?>&rdquo;</p>
    <p class="price-featured"><?php the_field('size'); ?> in</p>
           
    <p class="price-featured"><?php the_field('medium'); ?></p>
    <p class="price-featured">All originals framed in gold leaf 2&rdquo; deep floater frame</p>
    <a href="<?php the_permalink(); ?>"><button class="black-box-btn">View painting details</button></a>
    
          
        </div>

<?php endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif; ?>

            </div>

            
        </div>
    
</div>

<!--  END RECENT PAINTING BLOCK -->

<!--  --------------------------------------------------------- -->

<!-- NEWSLETTER BLOCK -->

<div class="newsletter">
    <h3 class="newsletter-title" >NEWSLETTER</h3>
    <div class="newsletter-subtitle">Be the first to see my new works!</div>
  
    <?php echo do_shortcode('[contact-form-7 id="432" title="Newsletter form - Footer" html_id="hp-news-form"]'); ?>
   
</div>

<!--  END NEWSLETTER BLOCK -->

<!--  --------------------------------------------- -->
<!-- HP NEWS/EVENTS SECTION -->

<div class="blog-onhomepage">
<h3 class="home-page-section-title" >NEWS / EVENTS</h3>
<!-- <div class="blog-section"> -->
<div class="blog-section" id="blog-section">
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    
    'orderby' => '',
);

$the_blog = new WP_Query( $args );
?>

<?php 
    if( $the_blog->have_posts() ) : 
        while( $the_blog->have_posts()) :
            $the_blog->the_post();
?>

        <div class="blog-area row">

        <div class="blog-item">
        <a href="blog">
        <?php the_post_thumbnail( 'medium', array(
            'class' => 'hp-blog-img, news-img'
        ) ); ?>
        </a>

    <a href="blog"><p class="hp-blog-title"><?php the_title(); ?></p></a>
    <div class="hp-blog-item-info">
    <!-- <p><?php the_field('show_name'); ?></p> -->
    <!-- <?php the_field('show_date_start'); ?> <?php the_field('show_date_end'); ?></p> -->
    <!-- <p><?php the_field('show_location'); ?></p> -->
    <p><?php the_field('show_info'); ?></p>
    <p class=""><?php the_excerpt(); ?></p>
    </div>       
    
    <a href="blog"><p class="hover-underline-animation hp-blog-readmore">Read More</p></a> 
        
        </div>
        <?php endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif; ?>
        
</div>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'cat' => 7,
    'orderby' => '',
);

$the_blog = new WP_Query( $args );
?>

<?php 
    if( $the_blog->have_posts() ) : 
        while( $the_blog->have_posts()) :
            $the_blog->the_post();
?>

        <div class="blog-area row">

        <div class="blog-item">
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium', array(
            'class' => 'hp-events-img',
        ) ); ?>
        </a>

    <a href="<?php the_permalink(); ?>"><h3 class="hp-blog-title"><?php the_content(); ?></h3></a>
    <div class="hp-blog-item-info">
    <!-- <p><?php the_field('show_name'); ?></p> -->
    <!-- <?php the_field('show_date_start'); ?> <?php the_field('show_date_end'); ?></p> -->
    <!-- <p><?php the_field('show_location'); ?></p> -->
    <!-- <p><?php the_field('show_info'); ?></p> -->
    <!-- <p class=""><?php the_excerpt(); ?></p> -->
    </div>       
    
    <!-- <a href="<?php the_permalink(); ?>"><p class="hover-underline-animation hp-blog-readmore">Read More</p></a>  -->
        
        </div>
        <?php endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif; ?>

</div>

<!-- <a href="blog"><button class="black-box-btn hp-blog-btn">view all articles</button></a> -->

</div>
</div>

<!-- END HP BLOG SECTION -->

<!--  -------------------------------- -->

<!-- MOVIE BLOCK -->

<div class="painting-movie">
    <!-- <iframe width="420" height="300" src="https://www.youtube.com/embed/LQOBoKmJ9xc?autoplay=1&mute=1&loop=1&controls=0&modestbranding=1" frameborder="0"></iframe> -->
    <!-- <iframe width="420" height="300" src="https://www.youtube.com/embed/LQOBoKmJ9xc&autoplay=1&mute=1" frameborder="0"></iframe> -->
<div class="iframe-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/LQOBoKmJ9xc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; mute;clipboard-write; encrypted-media; gyroscope; " allowfullscreen></iframe>
            </div>
</div>


<!-- END MOVIE BLOCK -->

<!--  ----------------------------------------------------------- -->
                
    </main>

<?php get_footer(); ?>




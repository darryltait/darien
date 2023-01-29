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
<?php 

if (get_fields()) {
    $fields = get_fields();
    foreach ($fields as $key => $value) {
      $$key = $value;
    }
  }
  
  get_header('home'); ?>
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
        <!-- originals_image -->
        <a href="originals">
        <div class="box1"> 
        <a href="originals"><button class="box black-box-btn">ORIGINALS</button></a>
</div>
</a>
</div>

        
        <!-- <a href="originals"><button class="box black-box-btn">ORIGINALS</button>
        <div class="box1" style="background-image: url('<?php echo get_field("originals_image"); ?>')";</a> -->
        <!-- <a href="originals"><button class="box black-box-btn">ORIGINALS</button>
        <div class="box1" </a> -->
<!-- </div> -->
<!-- </a> -->
<!-- </div> -->

<!-- PRINTS -->

<a href="https://darien-bogart.pixels.com" target="_blank"> 
<div class="collection-box print-box">
    <!-- printstore_image -->
    <!-- <img src="<?php echo get_field('printstore_image'); ?>" alt=""> -->
    <div class="box2">
    <a href="https://darien-bogart.pixels.com" target="_blank"><button class="box black-box-btn">PRINT STORE</button></a>
    <div class="discount-block">
    <h6 class="discount">Ask me about discounts on prints!</h6>
    </div>
    </div>
</div>
</a>

<!-- BLOG / EVENTS -->
<a href="events">
<div class="collection-box">
    <!-- blogevents_image -->
    <!-- <img src="<?php echo get_field('blogevents_image'); ?>" alt=""> -->
<div class="box3">
<a href="events"><button class="box black-box-btn">EVENTS</button></a>
</div>
</div>
</a>


</div>


<!-- END ALL PRODUCTS SECTION: ORIGINALS / PRINTS / BLOG-EVENTS -->

<!--  ----------------------------------------------------------------- -->

<!-- ARTIST BLOCK -->

<!-- <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/02/mugfront.jpg" alt=""> -->

<!-- <div class="artist-block"> 
    <div class="artist-block-info">
        <h3 class="name"><?php the_field('homepage_bio_name'); ?></h3>
        <p class="blurb"><em><?php the_field('homepage_bio_text'); ?></em></p>
    </div>
</div>   -->



<!-- ARTIST BLOCK Mobile / Tablet / up to 1200px -->
<div class="artist-block-mobile">
    <!-- <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/02/mugfront.jpg" alt=""> -->
    <div class="artist-block-mobile-info">
        <h3 class="recent-title"><?php the_field('homepage_bio_name'); ?></h3>
         <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/09/mugfront.jpg" alt="" class="artist-block-mug-mobile">
        <p class="artist-block-info-mobile-blurb"><?php the_field('homepage_bio_text'); ?></p>
        <!-- <a href="about"><button class="box"><?php the_field('homepage_bio_button'); ?></button></a> -->
    </div>
    
</div>  

<div class="artist-block-static">
    <div class="artist-block-static-info">
        <h3 class="recent-title"><?php the_field('homepage_bio_name'); ?></h3>
        <p class="blurb"><em><?php the_field('homepage_bio_text'); ?></em></p>
        <!-- <a href="about"><button class="box"><?php the_field('homepage_bio_button'); ?></button></a> -->
    </div>
    <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/09/mugfront.jpg" alt="">
</div>

<div class="artist-block-wide">
    <div class="artist-block-wide-info">
    <h3 class="recent-title"><?php the_field('homepage_bio_name'); ?></h3>
        <p class="blurb"><em><?php the_field('homepage_bio_text'); ?></em></p>
        <!-- <a href="about"><button class="box"><?php the_field('homepage_bio_button'); ?></button></a> -->
    </div>
    <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/09/mugfront.jpg" alt="">
</div>

<?php if( get_field('framed_painting')): ?>

<img src="<?php the_field('framed_painting'); ?>" alt=""/>
<?php endif; ?>


<!--  END ARTIST BLOCK -->

<!--  ----------------------------------------------------- -->

<!-- RECENT PAINTING BLOCK -->

<div class="new-work-container container">
        <h3 class="recent-title">Recent Painting</h3>
        <div class="new-painting-container">

        <?php
$post_object = get_field('recent_painting');
if ($post_object):
    $painting_title = get_the_title($post_object);
    $painting_price = get_field('price', $post_object);
    $painting_size = get_field('size', $post_object);
    $painting_medium = get_field('medium', $post_object);
    $painting_img = get_the_post_thumbnail($post_object, 'large');
    $painting_url = get_the_permalink($post_object);
    $framed_painting = get_field('framed_painting', $post_object);
    

?>

<!-- <a href="<?php echo $painting_url; ?>"><p><?php echo $painting_title; ?></p></a> -->

<a href="<?php echo $painting_url; ?>"><img src="<?php echo $framed_painting; ?>"</a>

<!-- <img src="<?php echo $framed_painting; ?>" /> -->



<div class="new-painting-info">
    <h5 class="title">&ldquo;<?php echo $painting_title; ?>&rdquo;</h5>
    <p class="price-featured"><?php echo $painting_size; ?> in</p>
    <!-- <p class="price-featured">$<?php echo $painting_price; ?></p> -->
    <p class="price-featured"><?php echo $painting_medium; ?></p>
    <!-- <p class="price-featured">All originals framed in gold leaf 2&rdquo; deep floater frame</p> -->
           
    
    <a href="<?php echo $painting_url; ?>"><button class="black-box-btn">View painting details</button></a>
    
          
        </div>

<!-- <p><?php echo $painting_medium; ?></p>
<p><?php echo $painting_price; ?></p>
<p><?php echo $painting_size; ?> in</p> -->



<?php endif; ?>

        
            
            <?php /*
$args = array(
    'post_type' => 'paintings',
    
    'posts_per_page' => 1,
    'orderby' => '',
);

$the_painting = new WP_Query( $args );
 */?>


<?php  /*
    if( $the_painting->have_posts() ) : 
        while( $the_painting->have_posts()) :
            $the_painting->the_post();
*/
?>



        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium', array(
            'class' => '',
        ) ); ?>
        </a>

       



<!-- </div> -->
<!-- <div class="new-painting-info">
    <p class="title">&ldquo;<?php the_title(); ?>&rdquo;</p>
    <p class="price-featured"><?php the_field('size'); ?> in</p>
           
    <p class="price-featured"><?php the_field('medium'); ?></p>
    <p class="price-featured">All originals framed in gold leaf 2&rdquo; deep floater frame</p>
    <a href="<?php the_permalink(); ?>"><button class="black-box-btn">View painting details</button></a>
    
          
        </div> -->

        
<?php /* endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif;   */ ?> 

            </div>

            
        </div>
    
</div>

<?php
$post_object = get_field('recent_painting');
if ($post_object):
    $painting_title = get_the_title($post_object);
    $painting_price = get_field('price', $post_object);
    $painting_size = get_field('size', $post_object);
    $painting_medium = get_field('medium', $post_object);
    $painting_img = get_the_post_thumbnail($post_object, 'medium');
    $painting_url = get_the_permalink($post_object);

?>

<!-- <a href="<?php echo $painting_url; ?>"><p><?php echo $painting_title; ?></p></a>


<p><?php echo $painting_medium; ?></p>
<p><?php echo $painting_price; ?></p>
<p><?php echo $painting_size; ?> in</p>
<a href="<?php echo $painting_url; ?>"><img src="<?php echo $painting_img; ?></a> -->


<?php endif; ?>


<!-- <div class="new-work-container container">
        <h3 class="recent-title">Recent Painting</h3>
        <div class="new-painting-container"> -->
            
            <?php /*
$args = array(
    'post_type' => 'paintings',
    
    'posts_per_page' => 1,
    'orderby' => '',
);

$the_painting = new WP_Query( $args );
?>


<?php 
    if( $the_painting->have_posts() ) : 
        while( $the_painting->have_posts()) :
            $the_painting->the_post();
 */ ?>



        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium', array(
            'class' => '',
        ) ); ?>
        </a>

       



<!-- </div> -->
<!-- <div class="new-painting-info">
    <p class="title">&ldquo;<?php the_title(); ?>&rdquo;</p>
    <p class="price-featured"><?php the_field('size'); ?> in</p>
           
    <p class="price-featured"><?php the_field('medium'); ?></p>
    <p class="price-featured">All originals framed in gold leaf 2&rdquo; deep floater frame</p>
    <a href="<?php the_permalink(); ?>"><button class="black-box-btn">View painting details</button></a>
    
          
        </div> -->

<?php /*  endwhile;
wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('sorry, no matches'); ?></p>
<?php endif; */  ?>

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
<!-- HP NEWS/EVENTS/IN HOMES SECTION -->

<div class="blog-onhomepage">
<h3 class="home-page-section-title" >EVENTS - IN HOMES</h3>

<div class="blog-section-hp">

        

        <div class="blog-item">
        <a href="events">
        <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/05/darien_art_show.jpg" alt="" class="hp-blog-img">
        </a>

    <a href="events"><h3 class="hp-blog-title">WHERE YOU CAN SEE MY WORK</h3></a>
    <div class="hp-blog-item-info">
    
    </div>       
        </div>
 
<!-- IN HOMES --> 

<div class="blog-item">
    <a href="in-homes">
    <img src="http://localhost:8888/bogartstudio/wp-content/uploads/2022/08/The-WoodlandsTX2.jpg" alt="" class="hp-blog-img">
    </a>
    <a href="in-homes"><h3 class="hp-blog-title">COLLECTOR&rsquo;S PHOTOS</h3></a>
    <div class="hp-blog-item-info">
    
    </div>  
</div>

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
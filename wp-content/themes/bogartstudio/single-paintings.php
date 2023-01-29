<div id="single-painting">
<?php get_header(); ?>


<?php while(have_posts() ) : the_post(); ?>

<?php endwhile; ?>

<div class="container content-area">
    <div class="col-md-12 painting-show">
        <div class="row">
            <div class= "col-md-8 img-fluid zoooom">
                <?php the_post_thumbnail('medium-large', array('class' => 'img-fluid, painting-img')); ?>
                <!-- <div class="row">
                            <div class="pages col-6 text-left"><?php next_post_link( '&laquo; %link'); ?></div>
                            <div class="pages col-6 text-right"><?php previous_post_link('%link &raquo;'); ?></div>
                        </div> -->
            </div>
            <div class="col-md-4">
                <h2 class="title"><?php the_title(); ?></h2>
                <?php
                    if( get_post_type() === 'paintings') : ?>
                    <div class="painting-info">
                    <p class="year"><?php the_field('year'); ?></p>
                    <p class="medium"><?php the_field('medium'); ?></p>
                    <p class="size"><?php the_field('size'); ?> in</p>

                    <!-- <span> -->
                    <div class="painting-price">
                    <?php if( ! get_field('sold')): ?>
                    $<?php the_field('price'); ?>
                    <?php endif; ?> </div>
                    <p class="prints-available">
                    <a href="https://darien-bogart.pixels.com" target="_blank">Prints available - Click here</a></p>
                    
                    <?php /* if( get_field('sold')): ?>
                        <span class="sold">SOLD</span> <a href="https://darien-bogart.pixels.com" target="_blank">Click here for prints of this work</a>
                        <?php endif; */ ?>
                    <?php endif; ?>
                    <!-- </span> -->
                    
                    <?php if( ! get_field('sold')): ?>
                    <p class="mounting-info">All originals framed in gold leaf 2&rdquo; deep floater frame</p>
                    

                    <!-- <button class="buy">Email me to buy now!</button> -->
                    <?php echo do_shortcode('[contact-form-7 id="417" title="Buy now form" html_id="buy-now-form"]'); ?>
                    <?php endif; ?>

                    
                    <div class="painting-info-social">
                <p>Share: </p>
                <a href="https://www.facebook.com/BogartStudio" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/darienbogart"><i class="fa-brands fa-instagram" target="_new"></i></a>
                <a href="https://twitter.com/darienbogartart?lang=en
"><i class="fa-brands fa-twitter"></i></a>
    
            </div>

                    </div>
                    

            
        </div>
        </div>
        </div>

        <div class="row other-og-paintings">
        <p class="painting-about col-md-12"><?php the_content(); ?></p>
                    </div>

        <div class="row">
                        <h4 class="other-paintings">Other original paintings</h4>
                            <div class="pages col-6 text-left other-paintings-pag"><?php next_post_link( '&laquo; %link'); ?></div>
                            <div class="pages col-6 text-end other-paintings-pag"><?php previous_post_link('%link &raquo;'); ?></div>
                        </div>


        

</div>


<?php get_footer(); ?>

</div>
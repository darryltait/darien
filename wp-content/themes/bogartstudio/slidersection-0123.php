<section class="slider">
                   <!-- Place somewhere in the <body> of your page -->
                        <div class="flexslider">
                        <ul class="slides">
                            <?php 
                            
                            for ($i=1; $i <4 ; $i++):
                            $slider_page[$i]  =         get_theme_mod('set_slider_page' . $i );
                            // $slider_button_text[$i] =   get_theme_mod('set_slider_button_text' . $i );
                            // $slider_button_url[$i] =    get_theme_mod('set_slider_button_url' . $i);
                            endfor;

                            $args = array(
                                'post_type' => 'page',
                                'posts_per_page' => 3,
                                'post__in'    => $slider_page,
                                'orderby' => 'post__in',
                            );

                            $slider_loop = new WP_Query( $args );
                            $j = 1;
                            if( $slider_loop->have_posts()): 
                                while( $slider_loop->have_posts()): 
                                    $slider_loop->the_post();
                            ?>
                            <li class="">
                            <!-- <img src="slide1.jpg" /> -->
                            <?php the_post_thumbnail( 'bogart-studio-slider', array( 'class' => 'img-fluid')); ?>
                            <div class="container">
                                <div class="slider-details-container">
                                <div class="slider-description">
                                        <div class="subtitle"><?php the_content(); ?></div>
                                        <!-- <a class="link" href="<?php echo $slider_button_url[$j]; ?>">
                                            <?php echo $slider_button_text[$j]; ?>
                                        </a> -->
                                    </div>
                                    <div class="slider-title">
                                        <h1><?php the_title(); ?></h1>
                                    </div>
                                   
                                </div>
                            </div>
                            </li>
                            <?php 
                            $j++;
                            endwhile;
                            wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                        </div>
                </section>
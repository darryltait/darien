<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bogart Studio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Darien Bogart is an artist who translates his inspiration of the American Landscape and Wildlife into bold, contemporary visions in acrylic on canvas.">
    <?php wp_head(); ?>
    <title>Darien Bogart</title>
</head>
<body <?php body_class(); ?>>
<div class="page-content">

        
        <div id="mainheader" class="">
            <div class="topbar">
                <p><?php echo get_theme_mod('set_topbar', 'Topbar info here'); ?></p>
            </div>
            <section class="header">
                <!-- <div class="container"> -->
                <div class="db-logo">
                            <?php if(function_exists('the_custom_logo')) {
                                the_custom_logo();
                            }; ?>
                            <p class="header-phone"><?php echo get_theme_mod('set_phone_info', 'Phone # here'); ?></p>
                </div>
                       

                     <!-- dropdown menu for screens less than 768px wide -->
                     <button class="nav-btn open-btn"><i class="fas fa-bars"></i></button>
                       
                         <div class="nav nav-bkg ">
                             <div class="nav nav-white ">
                                 <div class="drop-menu">
                                 <button class="nav-btn close-btn">
                                     <i class="fas fa-times"></i>
                                 </button>
                                 <?php 
                                wp_nav_menu( array(
                                        'theme_location' => 'bogart_studio_main_menu',
                                        'container' => 'div',
                                        'container_class' => 'drop-menu',
                                ));
                                ?>
                                 </div>
                             </div>  
                            </div>  <!-- end of dropdown -->
                            <div class="horz-menu">
                                                <?php 
                                                wp_nav_menu( array(
                                                        'theme_location' => 'bogart_studio_main_menu',
                                                        'container' => 'div',
                                                        // 'container_class' => 'horz-menu',
                                                ));
                                                ?>
                                                </div>
            </section>
                    
        </div>
                    <section class="slider">
                   <!-- Place somewhere in the <body> of your page -->
                        <div class="flexslider">
                            <h3 class="slide-text"><?php echo get_theme_mod('set_title_in_photo', 'Set title here'); ?></h3>
                        <ul class="slides">
                            <?php 
                            
                            for ($i=1; $i <5 ; $i++):
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
                               
                            
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid')); ?>
                            <!-- <?php the_post_thumbnail( 'bogart-studio-slider', array( 'class' => 'img-fluid')); ?> -->
                            <div class="container">
                                <div class="slider-details-container">
                               
                                <div class="slider-description">
                                        <!-- <div class="subtitle"><?php the_content(); ?></div> -->
                                        <!-- <a class="link" href="<?php echo $slider_button_url[$j]; ?>">
                                            <?php echo $slider_button_text[$j]; ?>
                                        </a> -->
                                    </div>
                                   
                                    <!-- <div class="slider-title">
                                        <h1><?php the_title(); ?></h1>
                                    </div> -->
                                   
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
                            </div>
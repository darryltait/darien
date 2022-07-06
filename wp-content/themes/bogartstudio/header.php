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
<body <?php body_class('policies'); ?>>
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
    

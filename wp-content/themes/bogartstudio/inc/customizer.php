<?php

/*
* Bogart Studio Theme Customizer
*
* @package Bogart Studio
*/

function bogart_studio_customizer( $wp_customize ) {
    // *--------------------------------------------------------------*
        // Studio Information
        $wp_customize->add_section(
            'sec_info', array(
                'title' => 'Studio Settings',
                'description' => 'Studio Info Section'
            )
            );
                // Field 1 - Topbar info
               $wp_customize->add_setting(
                'set_topbar', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field',
                )
                );
                $wp_customize->add_control(
                    'set_topbar', array(
                        'label' => 'Set topbar info',
                        // 'description' => 'Set phone number',
                        'section' => 'sec_info',
                        'type' => 'text',
                    )
                    );
                // Field 2 - Topbar info
               $wp_customize->add_setting(
                'set_title_in_photo', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field',
                )
                );
                $wp_customize->add_control(
                    'set_title_in_photo', array(
                        'label' => 'Set site info',
                        // 'description' => 'Set phone number',
                        'section' => 'sec_info',
                        'type' => 'text',
                    )
                    );
               // Field 3 - Studio phone #
               $wp_customize->add_setting(
                'set_phone_info', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field',
                )
                );
                $wp_customize->add_control(
                    'set_phone_info', array(
                        'label' => 'Set phone number',
                        // 'description' => 'Set phone number',
                        'section' => 'sec_info',
                        'type' => 'text',
                    )
                    );
               // Field 4 - Studio email
               $wp_customize->add_setting(
                'set_email', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field',
                )
                );
                $wp_customize->add_control(
                    'set_email', array(
                        'label' => 'Set email address',
                        // 'description' => 'Set email address',
                        'section' => 'sec_info',
                        'type' => 'text',
                    )
                    );
               // Field 5 - Featured
               $wp_customize->add_setting(
                'set_featured_title', array(
                    'type' => 'theme_mod',
                    'default' => 'Add featured title',
                    'sanitize_callback' => 'sanitize_text_field',
                )
                );
                $wp_customize->add_control(
                    'set_featured_title', array(
                        'label' => 'Set featured title',
                        // 'description' => 'Set featured title',
                        'section' => 'sec_info',
                        'type' => 'text',
                    )
                    );
               // Field 6 - Featured Collection
               $wp_customize->add_setting(
                'set_featured_collection', array(
                    'type' => 'theme_mod',
                    'default' => 'Add featured collection',
                    'sanitize_callback' => 'sanitize_text_field',
                )
                );
                $wp_customize->add_control(
                    'set_featured_collection', array(
                        'label' => 'Set featured collection',
                        // 'description' => 'Set featured collection',
                        'section' => 'sec_info',
                        'type' => 'text',
                    )
                    );
             

        // Slider  Section
        $wp_customize->add_section(
            'sec_slider', array(
                'title' => 'Slider Settings',
                'description' => 'Slider Section'
            )
        );
                // Field 1 - Slider page number 1
                $wp_customize->add_setting(
                    'set_slider_page1', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'absint',
                    )
                    );
                    $wp_customize->add_control(
                        'set_slider_page1', array(
                            'label' => 'Set slider page 1',
                            'description' => 'Set slider page 1',
                            'section' => 'sec_slider',
                            'type' => 'dropdown-pages',
                        )
                        );
                     // Field 2 - Slider Button Text number 1
                    $wp_customize->add_setting(
                        'set_slider_button_text1', array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'sanitize_text_field',
                        )
                        );
                        $wp_customize->add_control(
                            'set_slider_button_text1', array(
                                'label' => 'Button text for page 1',
                                'description' => 'Button text for page 1',
                                'section' => 'sec_slider',
                                'type' => 'text',
                            )
                            );
                            // Field 3 - Slider Button URL number 1
                    $wp_customize->add_setting(
                        'set_slider_button_url1', array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'esc_url_raw',
                        )
                        );
                        $wp_customize->add_control(
                            'set_slider_button_url1', array(
                                'label' => 'URL for page 1',
                                'description' => 'URL for page 1',
                                'section' => 'sec_slider',
                                'type' => 'url',
                            )
                            );
                            // *----------------------------------------*

                // Field 4 - Slider page number 2
                $wp_customize->add_setting(
                    'set_slider_page2', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'absint',
                    )
                    );
                    $wp_customize->add_control(
                        'set_slider_page2', array(
                            'label' => 'Set slider page 2',
                            'description' => 'Set slider page 2',
                            'section' => 'sec_slider',
                            'type' => 'dropdown-pages',
                        )
                        );
                     // Field 5 - Slider Button Text number 2
                    $wp_customize->add_setting(
                        'set_slider_button_text2', array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'sanitize_text_field',
                        )
                        );
                        $wp_customize->add_control(
                            'set_slider_button_text2', array(
                                'label' => 'Button text for page 2',
                                'description' => 'Button text for page 2',
                                'section' => 'sec_slider',
                                'type' => 'text',
                            )
                            );
                            // Field 6 - Slider Button URL number 2
                    $wp_customize->add_setting(
                        'set_slider_button_url2', array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'esc_url_raw',
                        )
                        );
                        $wp_customize->add_control(
                            'set_slider_button_url2', array(
                                'label' => 'URL for page 2',
                                'description' => 'URL for page 2',
                                'section' => 'sec_slider',
                                'type' => 'url',
                            )
                            );
                // *----------------------------------------*

                // Field 7 - Slider page number 3
                $wp_customize->add_setting(
                    'set_slider_page3', array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'sanitize_callback' => 'absint',
                    )
                    );
                    $wp_customize->add_control(
                        'set_slider_page3', array(
                            'label' => 'Set slider page 3',
                            'description' => 'Set slider page 3',
                            'section' => 'sec_slider',
                            'type' => 'dropdown-pages',
                        )
                        );
                     // Field 8 - Slider Button Text number 3
                    $wp_customize->add_setting(
                        'set_slider_button_text3', array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'sanitize_text_field',
                        )
                        );
                        $wp_customize->add_control(
                            'set_slider_button_text3', array(
                                'label' => 'Button text for page 3',
                                'description' => 'Button text for page 3',
                                'section' => 'sec_slider',
                                'type' => 'text',
                            )
                            );
                            // Field 9 - Slider Button URL number 3
                    $wp_customize->add_setting(
                        'set_slider_button_url3', array(
                            'type' => 'theme_mod',
                            'default' => '',
                            'sanitize_callback' => 'esc_url_raw',
                        )
                        );
                        $wp_customize->add_control(
                            'set_slider_button_url3', array(
                                'label' => 'URL for page 3',
                                'description' => 'URL for page 3',
                                'section' => 'sec_slider',
                                'type' => 'url',
                            )
                            );

                        }

add_action('customize_register', 'bogart_studio_customizer');
<?php

add_action('after_setup_theme','wplearntheme');
if(!function_exists('wplearntheme')){
    function wplearntheme(){


        load_theme_textdomain('sablu_hasan',get_template_directory()."/languages");

        add_theme_support('post-thumbnails', array('post','page','service'));

        add_theme_support('post-formats',array('video','aside','gallery','audio','image'));

        add_action( 'wp_enqueue_scripts','mywpscript');

        if(!function_exists('mywpscript')){
            function mywpscript(){
                  wp_enqueue_style('boostrap_css',
                get_parent_theme_file_uri('assets/css/bootstrap.min.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('nice_css',
                get_parent_theme_file_uri('assets/css/nice-select.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('awesome_css',
                get_parent_theme_file_uri('assets/css/font-awesome.min.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('icofont_css',
                get_parent_theme_file_uri('assets/css/icofont.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('slicknav_css',
                get_parent_theme_file_uri('assets/css/slicknav.min.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('carousel_css',
                get_parent_theme_file_uri('assets/css/owl-carousel.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('datepicker_css',
                get_parent_theme_file_uri('assets/css/datepicker.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('animate_css',
                get_parent_theme_file_uri('assets/css/animate.min.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('magnific_css',
                get_parent_theme_file_uri('assets/css/magnific-popup.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('normalize_css',
                get_parent_theme_file_uri('assets/css/normalize.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('normalize_css',
                get_parent_theme_file_uri('assets/css/normalize.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('style_mama',
                get_parent_theme_file_uri('assets/css/style.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                wp_enqueue_style('responsive_css',
                get_parent_theme_file_uri('assets/css/responsive.css'),
                array(),
                wp_get_theme()->get('version'),'all');

                
                wp_enqueue_style( 'unique_id',get_stylesheet_uri());
              

            // wp_add_inline_style(
            //     'main_css',
            //     'body{background:red}'
            // );
            
            wp_enqueue_script(
                "main",
                get_template_directory_uri()."/assets/js/main.js",
                array(),
                wp_get_theme()->get('Version'),
                true
                
            );

        //     wp_add_inline_script( 'main', 
        //     'console.log("allah all time help us");'
        // );


            
            }
        }
    }


}





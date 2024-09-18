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
                wp_enqueue_style('unique_id',get_stylesheet_uri());
                wp_enqueue_style('main_css',
                get_parent_theme_file_uri('assets/css/main.css'),
                array(),
                wp_get_theme()->get('version'),
                'all'
            
            );

            wp_add_inline_style(
                'main_css',
                'body{background:red}'
            );
            
            wp_enqueue_script(
                "main",
                get_template_directory_uri()."/assets/js/main.js",
                array(),
                wp_get_theme()->get('Version'),
                true
                
            );

            wp_add_inline_script( 'main', 
            'console.log("allah all time help us");'
        );


            
            }
        }
    }


}





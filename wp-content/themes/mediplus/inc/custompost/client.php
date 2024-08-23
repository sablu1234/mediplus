<?php 
if(!function_exists('mystdifno')){
    function mystdifno(){
        register_post_type('student',
        array(
           
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array( 'slug' => 'products' ), // my custom slug
            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
            'labels'=>array(
                'name'=>__('client'),
                'menu_name'=>'All clients',
                'singular_name'=>'ami',
                'not_found'=>'no post foundsss',
                'add_new'=>'add new client',
                'featured_image'=>'featured set image',
                'set_featured_image'=>'Set your image',
    
            )
        ),
    );
    }
    }
    
    add_action('init','mystdifno');

?>
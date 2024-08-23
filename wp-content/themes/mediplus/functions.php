<?php 
if(!function_exists('mythemefunction')){
    function mythemefunction(){
    add_theme_support('post-thumbnails');
    add_theme_support('block-templates');
    add_theme_support('post-formats', array('video','image','quote','audio','gallery','aside'),);
    }

    function hasan_featured_image_text($content){
        return $content=str_replace(__('Set featured image'),__('hasan tor image de'),$content);
    }
    add_filter( 'admin_post_thumbnail_html', 'hasan_featured_image_text' );


    
}
add_action('after_setup_theme','mythemefunction');


include('inc/custompost/client.php');

require('inc/custompost/team.php');

?>
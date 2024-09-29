<?php 
if(!function_exists('myprice')){
    function myprice(){
        register_post_type('mprice',array(
            'labels'=>array(
                'name'=>__('My mprice','sablu_hasan'),
                'singular_name'=>__('Price','sablu_hasan'),
                'menu_name'=>__('My mprice','sablu_hasan'),
                'all_items'=>__('All My mprice ','sablu_hasan'),
                'view_items'=>__('All','sablu_hasan'),
                'add_new'=>__('Add New Help mprice','sablu_hasan'),
                'edit_item'=>__('Add New edit Help mprice','sablu_hasan'),
                'update_item'=>__('Add New Update  mprice','sablu_hasan'),
                'search_items'=>__('Add New search item','sablu_hasan'),
                'not_found'=>__('There is No Help mprice','sablu_hasan'),
                'not_found_in_trash'=>__('Not Found In Trash mprice','sablu_hasan'),
            ),
            'public'=>true,
            'supports'=>array('title','excerpt'),
            'capability_type'=> 'post',
            'menu_position'=>5,
        ));
    }
}
add_action('init','myprice');


?>
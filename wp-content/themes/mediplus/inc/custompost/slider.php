<?php 
if(!function_exists('mycustompost')){
    function mycustompost(){
        register_post_type('mywonlider',array(
            'labels'=>array(
                'name'=>__('My Slider','sablu_hasan'),
                'singular_name'=>__('Slider','sablu_hasan'),
                'menu_name'=>__('My Service Help','sablu_hasan'),
                'all_items'=>__('All My Service Help List','sablu_hasan'),
                'view_items'=>__('My Service Best Help','sablu_hasan'),
                'add_new'=>__('Add New Help Service','sablu_hasan'),
                'edit_item'=>__('Add New edit Help Service','sablu_hasan'),
                'update_item'=>__('Add New Update Help Service','sablu_hasan'),
                'search_items'=>__('Add New search item','sablu_hasan'),
                'not_found'=>__('There is No Help Service','sablu_hasan'),
                'not_found_in_trash'=>__('Not Found In Trash service','sablu_hasan'),
            ),
            'public'=>true,
            'supports'=>array('title','excerpt'),
            'capability_type'=> 'post',
            'menu_position'=>25,
        ));
    }
}
add_action('init','mycustompost');

?>
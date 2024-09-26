<?php 
if(!function_exists('mycustompostcount')){
    function mycustompostcount(){
        register_post_type('count_down',array(
            'labels'=>array(
                'name'=>__('My count down','sablu_hasan'),
                'singular_name'=>__('count down','sablu_hasan'),
                'menu_name'=>__('My count down','sablu_hasan'),
                'all_items'=>__('All My count down List','sablu_hasan'),
                'view_items'=>__('My count down Best Help','sablu_hasan'),
                'add_new'=>__('Add New Help count down','sablu_hasan'),
                'edit_item'=>__('Add New edit Help count down','sablu_hasan'),
                'update_item'=>__('Add New Update  count down','sablu_hasan'),
                'search_items'=>__('Add New search item','sablu_hasan'),
                'not_found'=>__('There is No Help count down','sablu_hasan'),
                'not_found_in_trash'=>__('Not Found In Trash count down','sablu_hasan'),
            ),
            'public'=>true,
            'supports'=>array('title','excerpt'),
            'capability_type'=> 'post',
            'menu_position'=>5,
        ));
    }
}
add_action('init','mycustompostcount');

?>
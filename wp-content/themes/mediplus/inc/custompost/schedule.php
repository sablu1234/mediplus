<?php 
if(!function_exists('myschedule')){
    function myschedule(){
        $mypostlebel="schedule";
        register_post_type('schedule',array(
            'labels'=>array(
                'name'=>__($mypostlebel,'sablu_hasan'),
                'singular_name'=>__($mypostlebel,'sablu_hasan'),
                'menu_name'=>__($mypostlebel,'sablu_hasan'),
                'all_items'=>__($mypostlebel.'List','sablu_hasan'),
                'view_items'=>__($mypostlebel,'sablu_hasan'),
                'add_new'=>__('Add new',$mypostlebel,'sablu_hasan'),
                'edit_item'=>__('Add New'.$mypostlebel,'sablu_hasan'),
                'update_item'=>__('Add New Update'.$mypostlebel,'sablu_hasan'),
                'search_items'=>__('Add New search item','sablu_hasan'),
                'not_found'=>__('There is No Help'.$mypostlebel,'sablu_hasan'),
                'not_found_in_trash'=>__('Not Found In Trash'.$mypostlebel,'sablu_hasan'),
            ),
            'public'=>true,
            'supports'=>array('title','excerpt','editor'),
            'capability_type'=> 'post',
        ));
    }
}
add_action('init','myschedule');




?>
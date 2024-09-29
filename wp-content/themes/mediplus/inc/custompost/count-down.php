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


// my count-down meta
if(!function_exists('mymetacount')){
    function mymetacount(){
        add_meta_box(
            'hadi_pagla_count',
            'Add Icon',
            'myinputhtmlcount',
            'count_down'
        );
    }
}

if(!function_exists('myinputhtmlcount')){
    function myinputhtmlcount($post){
        $icon=get_post_meta($post->ID,'unique_key_count',true);
        ?>
        <label for="addicon">Add Count Down Icon</label>
        <input type="text" name="add_icon_count" id="add_icon_count" value="<?php echo $icon;?>">
        <?php
    }
}
add_action('add_meta_boxes','mymetacount');

if(!function_exists('mymetasavecount')){
    function mymetasavecount($post_id){
        if(isset($_POST['add_icon_count'])){
            update_post_meta(
                $post_id,
                'unique_key_count',
                $_POST['add_icon_count'],
            );
        }
      
    }
}
add_action('save_post','mymetasavecount');


?>
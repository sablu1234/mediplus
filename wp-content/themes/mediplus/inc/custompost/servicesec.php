<?php 
if(!function_exists('mycustompostcountser')){
    function mycustompostcountser(){
        register_post_type('service',array(
            'labels'=>array(
                'name'=>__('My service Section','sablu_hasan'),
                'singular_name'=>__('service','sablu_hasan'),
                'menu_name'=>__('My service','sablu_hasan'),
                'all_items'=>__('All My service List','sablu_hasan'),
                'view_items'=>__('My service Best Help','sablu_hasan'),
                'add_new'=>__('Add New Help service','sablu_hasan'),
                'edit_item'=>__('Add New edit Help service','sablu_hasan'),
                'update_item'=>__('Add New Update  service','sablu_hasan'),
                'search_items'=>__('Add New search item','sablu_hasan'),
                'not_found'=>__('There is No Help service','sablu_hasan'),
                'not_found_in_trash'=>__('Not Found In Trash service','sablu_hasan'),
            ),
            'public'=>true,
            'supports'=>array('title','excerpt'),
            'capability_type'=> 'post',
        ));
    }
}
add_action('init','mycustompostcountser');



// my servicesec meta
if(!function_exists('mymetacountser')){
    function mymetacountser(){
        add_meta_box(
            'hadi_pagla_ser',
            'Add Icon',
            'myinputhtmser',
            'service'
        );
    }
}

if(!function_exists('myinputhtmser')){
    function myinputhtmser($post){
        $icon=get_post_meta($post->ID,'unique_key_ser',true);
        ?>
        <label for="addicon">Add Count Down Icon</label>
        <input type="text" name="add_icon_ser" id="add_icon_ser" value="<?php echo $icon;?>">
        <?php
    }
}
add_action('add_meta_boxes','mymetacountser');

if(!function_exists('mymetasaveser')){
    function mymetasaveser($post_id){
        if(isset($_POST['add_icon_ser'])){
            update_post_meta(
                $post_id,
                'unique_key_ser',
                $_POST['add_icon_ser'],
            );
        }
      
    }
}
add_action('save_post','mymetasaveser');


?>
<?php 
if(!function_exists('mycustomposthero')){
    function mycustomposthero(){
        register_post_type('hero',array(
            'labels'=>array(
                'name'=>__('My Hero Section','sablu_hasan'),
                'singular_name'=>__('Hero','sablu_hasan'),
                'menu_name'=>__('My Hero','sablu_hasan'),
                'all_items'=>__('All My Hero List','sablu_hasan'),
                'view_items'=>__('My Hero Best Help','sablu_hasan'),
                'add_new'=>__('Add New Help Hero','sablu_hasan'),
                'edit_item'=>__('Add New edit Help Hero','sablu_hasan'),
                'update_item'=>__('Add New Update  Hero','sablu_hasan'),
                'search_items'=>__('Add New search item','sablu_hasan'),
                'not_found'=>__('There is No Help Hero','sablu_hasan'),
                'not_found_in_trash'=>__('Not Found In Trash Hero','sablu_hasan'),
            ),
            'public'=>true,
            'supports'=>array('title','excerpt','thumbnail'),
            'capability_type'=> 'post',
        ));
    }
}
add_action('init','mycustomposthero');



// my Herosec meta
if(!function_exists('myherometa')){
    function myherometa(){
        add_meta_box(
            'hadi_pagla_hero',
            'Add Link',
            'myinputhtmlhero',
            'Hero'
        );
    }
}

if(!function_exists('myinputhtmlhero')){
    function myinputhtmlhero($post){
        $icon=get_post_meta($post->ID,'unique_key_add_link',true);
        ?>
        <label for="addicon">Add Link</label>
        <input type="text" name="add_link" id="add_link" value="<?php echo $icon;?>">
        <?php
    }
}
add_action('add_meta_boxes','myherometa');

if(!function_exists('mymetasavehero')){
    function mymetasavehero($post_id){
        if(isset($_POST['add_link'])){
            update_post_meta(
                $post_id,
                'unique_key_add_link',
                $_POST['add_link'],
            );
        }
      
    }
}
add_action('save_post','mymetasavehero');


?>
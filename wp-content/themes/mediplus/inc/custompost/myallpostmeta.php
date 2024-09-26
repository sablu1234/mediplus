<?php 

//meta boxes
if(!function_exists('mymeta')){
    function mymeta(){
        add_meta_box(
            'hadi_pagla',
            'Add Icon',
            'myinputhtml',
            'mywonlider'
        );
    }
}

if(!function_exists('myinputhtml')){
    function myinputhtml($post){
        $icon=get_post_meta($post->ID,'unique_key',true);
        ?>
        <label for="addicon">Add Service Icon</label>
        <input type="text" name="add_icon" id="add_icon" value="<?php echo $icon;?>">
        <?php
    }
}
add_action('add_meta_boxes','mymeta');

if(!function_exists('mymetasave')){
    function mymetasave($post_id){
        if(isset($_POST['add_icon'])){
            update_post_meta(
                $post_id,
                'unique_key',
                $_POST['add_icon'],
            ); 
        }
     
    }
}
add_action('save_post','mymetasave');




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
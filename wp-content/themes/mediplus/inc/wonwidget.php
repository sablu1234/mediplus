<?php 

class mywpwidget extends wp_widget{
    function __construct(){
        parent::__construct('myunique_id',
    
    __('mamurjor Widget',''));
    }
}

add_action('widgets_init','mywonwidgetstart');
if(!function_exists('mywonwidgetstart')){
    function mywonwidgetstart(){
        register_widget('mywpwidget');
    }
}
?>
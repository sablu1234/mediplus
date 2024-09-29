<?php 

//menu create
add_action('init','myallmenus');
if(!function_exists('myallmenus')){

    //class add in li
    function mymamaliclass($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'mymamaliclass', 1, 3);

    //add class in a
    function myclassin_a($atts) {
        $atts['class'] = "hadijaman";
        return $atts;
      }
      add_filter( 'nav_menu_link_attributes', 'myclassin_a');

    //active class add in ul
        add_filter('wp_nav_menu_objects','myactiveclass');
    function myactiveclass($menu_items){
        $menu_items[1]->classes[] ="active";
    return $menu_items;
    }


    function myallmenus(){
        register_nav_menus(
            array(
                'top-menu'=>__('Top Menu','sablu_hasan'),
                'primary-menu'=>__('Primary Menu','sablu_hasan'),
                'footer-one'=>__('Footer One','sablu_hasan'),
                'footer-two'=>__('Footer Two','sablu_hasan'),

            ),
        );
    }
}




?>
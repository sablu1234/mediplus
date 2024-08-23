<?php 
include('about.php');

echo userinfo();

echo get_bloginfo('name')."<br>";
echo get_bloginfo('description').'<br>';
echo get_bloginfo('admin_email')."<br>";
echo get_bloginfo('charset')."<br>";
echo get_bloginfo('version')."<br>";

?>
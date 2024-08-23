<?php 
echo "allah mohab";

if(has_post_thumbnail()){
    the_post_thumbnail( 'thumbnail');
}
else{
    ?>
    <img src="<?php echo get_parent_theme_file_uri( 'assets/img/pf4.jpg' ); ?>" alt="#">
    <?php
}
the_content();


?>
<?php echo "this is singular.php";?>
<?php
    
    if(have_posts()):
        while(have_posts()):the_post();
?>

<article>
  <h1>This is singular page</h1>
    <h1><?php the_title();?></h1>
    <p><?php the_content();?></p>
  </article>
<?php
    endwhile;
else:
    _e("kono post nai","sablu_hasan");
    endif;
    
    ?>
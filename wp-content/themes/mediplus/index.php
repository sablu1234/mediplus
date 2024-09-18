<?php get_header('top');?>

<section>
    <?php get_sidebar();?>
  
  
    <?php //get_template_part('template-parts/content','video');?>
    <?php //get_template_part('template-parts/content','audio');?>
    <?php //get_template_part('pages/custompage');?>
    <?php //echo get_permalink();?>
    <a href="<?php //echo get_permalink();?>"><?php _e("kono post nai","sablu_hasan");?></a>


    <?php
    
    if(have_posts()):
        while(have_posts()):the_post();

        get_template_part('template-parts/content',get_post_format());

    endwhile;
else:
    _e("kono post nai","sablu_hasan");
    endif;
    
    ?>

</section>

<?php get_footer('one');?>

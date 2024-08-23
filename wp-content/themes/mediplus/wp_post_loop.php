<?php 
while(have_posts()): the_post();
echo get_the_title().'<br>';
echo get_the_content().'<br>';
the_author();
the_excerpt();
the_id();
the_meta();
the_shortlink();
the_tags();
the_time();
the_title();
is_home();
is_admin();
is_single();
is_page();
is_page_template();
is_author();
is_category();
the_category();

endwhile;




?>
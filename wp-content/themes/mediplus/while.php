<?php 
$count_posts= wp_count_posts()->publish;


$count_posts=0;
while($count_posts<6){
    echo $count_posts.'<br>';
    $count_posts++;

}


?>
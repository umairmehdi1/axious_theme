<?php 


function my_style(){
    wp_enqueue_style('mystyle', get_template_directory_uri() . '/assets/stylesheet/style.css');

}

add_action('wp_enqueue_scripts','my_style');



?>
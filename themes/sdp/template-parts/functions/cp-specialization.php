<?php 

function specialization(){
    
    $args = array(
        'labels' => array(
            'name' => 'Specjalizacje',
            'singular_name' => 'Specjalizacja',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-chart-line',
        'supports' => array('title', 'editor', 'thumbnail')


        );

    register_post_type('specialty', $args);
}

add_action('init', 'specialization');



function specialty_taxonomy(){

    $args = array(

        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('specialty_tax', array('specialty'), $args );
}

add_action('init', 'specialty_taxonomy');


?>
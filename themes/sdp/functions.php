<?php 

function awesome_script_enqueue() {
    wp_enqueue_style('customstyle',get_template_directory_uri().'/dist/css/styles.css', 
    array(), '1.0.0','all');
 }
 
 add_action('wp_enqueue_scripts','awesome_script_enqueue');


 add_theme_support( 'post-thumbnails' );

?>


<?php 





function team_members(){
    
    $args = array(
        'labels' => array(
            'name' => 'Team members',
            'singular_name' => 'Team member',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title',  'thumbnail')


        );

    register_post_type('team', $args);
}

add_action('init', 'team_members');



function member_taxonmy(){

    $args = array(

        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('members', array('team'), $args );
}

add_action('init', 'member_taxonmy');

?>


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
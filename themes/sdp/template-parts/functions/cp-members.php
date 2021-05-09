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
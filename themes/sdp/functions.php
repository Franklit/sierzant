<?php 

function awesome_script_enqueue() {
    wp_enqueue_style('customstyle',get_template_directory_uri().'/dist/css/styles.css', 
    array(), '1.0.0','all');
    wp_enqueue_script( 'script', get_stylesheet_directory_uri(). '/dist/js/main.js', array(), '1.1', 'all' );
 }
 
 add_action('wp_enqueue_scripts','awesome_script_enqueue');



 add_theme_support( 'post-thumbnails' );
 add_theme_support('widgets');



//Custom post type-Members
get_template_part('template-parts/functions/cp-members');

//Custom post type-Specialization
get_template_part('template-parts/functions/cp-specialization');

// //Widget menu categories
get_template_part('template-parts/functions/widget-menu-category');



//Menu
// function create_menu() {
//     register_nav_menu('navigation-menu',__( 'Menu górne'));
// }

// add_action('init', 'create_menu');

function create_menu() {
    register_nav_menus(

    array(
        'navigation-menu' => __( 'Menu górne' ),
        'footer-menu' => __( 'Footer Menu' ),
        // 'mobile-menu' => __( 'Mobile Menu' ),

    ) 
    );
}

add_action('init', 'create_menu');





//Sidebars
function my_sidebars(){

    register_sidebar(

        array(
            'name' => 'Mega Menu',
            'id' => 'page-sidebar',
        )
    );
}
add_action('widgets_init', 'my_sidebars');





// if( !defined(THEME_IMG_PATH)){
//     define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/template-parts/img' );
//    }


if( function_exists('acf_add_options_page') ) {
	
	$parent = acf_add_options_page(array(
		// 'page_title' 	=> 'Theme General Settings',
		// 'menu_title'	=> 'Theme Settings',
		// 'menu_slug' 	=> 'theme-general-settings',
		// 'capability'	=> 'edit_posts',
		// 'redirect'		=> false
        'page_title' => esc_html__( 'Theme options', 'adwars' ),
        'menu_title' => esc_html__( 'Theme options', 'adwars' ),
        'redirect'   => esc_html__( 'Theme options', 'adwars' )
	));

    foreach ([ 'en', 'de'] as $lang) {

        acf_add_options_sub_page([
            'page_title' => sprintf(
                // translators: %s: Language code (for example EN).
                esc_html__( 'Global ( %s )' ),
                strtoupper( $lang )
              ),
              'menu_title' => sprintf(
                // translators: %s: Language code (for example EN).
                esc_html__( 'Global ( %s )' ),
                strtoupper( $lang )
              ),
              'menu_slug'  => "sdp-${lang}-sm",
            'post_id' => $lang,
            'parent'     => $parent['menu_slug']
        ]);
    
    }

}




include 'breadcrumbs.php';


?>



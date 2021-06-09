<?php 


// Creating the widget 
class wpb_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'wpb_widget', 
      
    // Widget name will appear in UI
    __('Menu Categorie CP', 'wpb_widget_domain'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
    );
    }
      
    // Creating widget front-end
    public function widget( $args, $instance ) {


    $custom_terms = get_terms('specialty_tax');

    foreach($custom_terms as $custom_term) {
        wp_reset_query();
        $args = array('post_type' => 'specialty',
            // 'posts_per_page' => 3,
            
            'tax_query' => array(
                array(
                    'taxonomy' => 'specialty_tax',
                    'field' => 'slug',
                    'terms' => $custom_term->slug,
                ),
            ),
        );

        $loop = new WP_Query($args);
            if($loop->have_posts()) {
                echo '<div class="navigation-menu__category">';
                echo '<div class="navigation-menu__box">';
                echo '<a href="'.get_term_link($custom_term).'" class="navigation-menu__category-title">'.$custom_term->name. '</a>';
                

        
                while($loop->have_posts()) : $loop->the_post();
                    echo '<div class="navigation-menu__box-item-container">';
                    echo '<a href="'.get_permalink().'" class="navigation-menu__category-item">'.get_the_title().'</a>';
                    echo '<span class="navigation-menu-item-arrow"><span class="navigation-menu__box-item-arrow-icon"></span></span>';
                    echo '</div>';
                endwhile;
                echo '</div>';
                echo '</div>';
            }
            wp_reset_postdata();
        }
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    
    } 
     
     
    // Register and load the widget
    function wpb_load_widget() {
        register_widget( 'wpb_widget' );
    }
    add_action( 'widgets_init', 'wpb_load_widget' );



?>
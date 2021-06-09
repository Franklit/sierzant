<?php 
/* Template Name: Expertise */
get_header();

$expertiseHeading = get_field('field_60ad192a164c7');
$expertiseImageTop = get_field('field_60ad1934164c8');
$expertiseDescription = get_field('field_60ad1954164c9');
?>


<?php if ($expertiseImageTop) : ?>
    <?php echo wp_get_attachment_image($expertiseImageTop, 'large', false, ['class' => 'top-image-g']); ?>
<?php endif; ?>


<section class="expertise g-container">
    <div class="expertise__container">
        <?php if($expertiseHeading):?>
            <h2 class="expertise__heading"><?php echo esc_html($expertiseHeading);?></h2>
        <?php endif;?>
        <?php if($expertiseDescription):?>
            <p class="expertise__description"><?php echo esc_html($expertiseDescription);?></p>
        <?php endif;?>
        <div class="expertise__boxes">
            
                <?php 
                
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
                            echo '<div class="expertise__box">';
                            echo '<a href="'.get_term_link($custom_term).'" class="expertise__box-title">'.$custom_term->name. '</a>';
                    
                            while($loop->have_posts()) : $loop->the_post();
                            echo '<div class="expertise__box-item-container">';
                                echo '<a href="'.get_permalink().'" class="expertise__box-item">'.get_the_title().'</a>';
                                echo '<span class="expertise__box-item-arrow"><span class="expertise__box-item-arrow-icon"></span></span>';
                            echo '</div>';
                            endwhile;
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    }
                
                ?>
        </div>
    </div>
</section>



<?php
get_footer();
?>
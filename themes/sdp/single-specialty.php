<?php 
get_header();
 
    $specialization = 'field_6092bc85e7246';

    $personContact = get_field('field_60a2a8d634c7f');

?>







<section class="single-specialty">
        <div class="single-specialty__container g-container">
            <div class="single-specialty__content">
                <h2 class="single-specialty__heading"><?php esc_html(the_title()) ;?></h2>

                <?php if('' !== get_post()->post_content ):?>
                    <p class="single-specialty__text"><?php esc_html(the_content()); ?></p>
                <?php endif;?>

                <?php if(have_rows($specialization)): ?>
                    <ul class="single-specialty__ul">
                    <?php while(have_rows($specialization)): the_row();?>
                        <?php     $specializationItem = get_sub_field('field_6092bca6e7247');?>

                        <li class="single-specialty__li"><?php echo $specializationItem; ?></li>
                    <?php endwhile;?>
                    </ul>
                <?php endif; ?>                
            </div>
            <?php if($personContact):?>
                <div class="single-specialty__keyContact">
                    <?php foreach($personContact as $person):?>
                        <?php 
                        
                            $name = get_the_title($person->ID ); 
                            $position = get_field('field_608e914edfe46', $person->ID);
                            $personImg = get_field('field_608e98cce77d3', $person->ID);
                        ?>


                            <?php if ($personImg) : ?>
                                <?php echo wp_get_attachment_image($personImg, 'large', false, ['class' => 'single-specialty__img']); ?>
                            <?php endif; ?>
                            <?php if($name):?>
                                <h3 class="single-specialty__keyPerson"><?php echo esc_html($name);?> </h3>
                            <?php endif;?>
                            <?php if($position):?>
                                <p class="single-specialty__position"><?php echo esc_html($position)?></p>
                            <?php endif;?>
                            <a href="<?php echo get_permalink($person->ID); ?>" class="single-specialty__button">siema</a>
                    <?php endforeach;?> 
                </div>
            <?php endif;?>
        </div>
</section>




<?php get_footer();?>
<?php 
get_header();
 
    $specialization = 'field_60ad2e0d3b762';
    $personContact = get_field('field_60ad2e6c3b764');

?>




<section class="single-specialty">
        <div class="single-specialty__container g-small-container">
            <div class="single-specialty__content">
            <?php 
                    Breadcrumbs::init();
                ?>
                <h2 class="single-specialty__heading"><?php esc_html(the_title()) ;?></h2>

                <?php if('' !== get_post()->post_content ):?>
                    <?php esc_html(the_content()); ?>
                <?php endif;?>
              

                <?php if(have_rows($specialization)): ?>
                    <ul class="single-specialty__ul">
                    <?php while(have_rows($specialization)): the_row();?>
                        <?php     $specializationItem = get_sub_field('field_60ad2e403b763');?>

                        <li class="single-specialty__li"><?php echo $specializationItem; ?></li>
                    <?php endwhile;?>
                    </ul>
                <?php endif; ?>                
            </div>
            <?php if($personContact):?>
                <div class="single-specialty__keyContact">
                <h3 class="single-specialty__keyHeading">Key Contact</h3>
                    <?php foreach($personContact as $person):?>
                        <?php 
                        
                            $name = get_the_title($person->ID ); 
                            $position = get_field('field_60ad206c8f0be', $person->ID);
                            $personImg = get_field('field_60ad20728f0bf', $person->ID);
                        ?>

                        <div class="single-specialt__keyContactBox">
                        <div class="single-specialt__keyContactBox-innerContainer">
                            <?php if ($personImg) : ?>
                                <?php echo wp_get_attachment_image($personImg, 'large', false, ['class' => 'single-specialty__img']); ?>
                            <?php endif; ?>
                            <?php if($name):?>
                                <h3 class="single-specialty__keyPerson"><?php echo esc_html($name);?> </h3>
                            <?php endif;?>
                            <?php if($position):?>
                                <p class="single-specialty__position"><?php echo esc_html($position)?></p>
                            <?php endif;?>
                            <a href="<?php echo get_permalink($person->ID); ?>" class="single-specialty__button g-button">view profile</a>
                            </div>
                        </div>
                    <?php endforeach;?> 
                </div>
            <?php endif;?>
            <?php if( is_singular('specialty') ) { ?>

                <div class="next-specialty">
                    <?php if(get_previous_post_link( )):?>
                        <div class="next-specialty__left"><p class="otherpost otherpost--prev">pervious post</p><?php previous_post_link( '%link' ) ?></div>
                    <?php endif;?>
                    <?php if(get_next_post_link()):?>
                        <div class="next-specialty__right"><p class="otherpost otherpost--next">next post</p><?php next_post_link( '%link ' ) ?></div>
                    <?php endif;?>
            </div><?php } ?>
        </div>
</section>






<?php get_footer();?>
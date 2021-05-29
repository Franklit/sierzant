<?php
$personName = get_field('field_60ad205e8f0bd');
$personPosition = get_field('field_60ad206c8f0be');
$personImage = get_field('field_60ad20728f0bf');

$personRepeater = 'field_60ad20878f0c0';
?>


<section class="person">
    <div class="person__container g-container">
        <div class="person__top">
            <div class="person__details">
                <?php if($personName):?>
                    <h2 class="person__name"><?php echo esc_html($personName);?> </h2>
                <?php endif;?>
                <?php if($personPosition):?>
                    <p class="person__positon"><?php echo esc_html($personPosition);?></p>
                <?php endif;?>

            </div>
            <?php if ($personImage) : ?>
                <?php echo wp_get_attachment_image($personImage, 'large', false, ['class' => 'person__image']); ?>
            <?php endif; ?>
        </div>

        <?php if(have_rows($personRepeater)):?>
            
            <div class="person__description">
                    <?php while(have_rows($personRepeater)): the_row(); ?>
                        <?php 
                            $personTitle = get_sub_field('field_60ad20cc8f0c1');
                            $personDescription = get_sub_field('field_60ad20d38f0c2');
                            $personIcon = get_sub_field('field_60ad20da8f0c3');
                        ?>

                        <?php if ($personIcon) : ?>
                            <?php echo wp_get_attachment_image($personIcon, 'large', false, ['class' => 'person__icon']); ?>
                        <?php endif; ?>

                        <?php if($personTitle):?>
                            <h2 class="person__title-description"><?php echo esc_html($personTitle);?></h2>
                        <?php endif;?>
                        <?php if($personDescription):?>
                            <?php echo $personDescription;?>
                        <?php endif;?>


                
                    <?php endwhile;?>
                
            </div>

        <?php endif; ?>
    </div>


</section>

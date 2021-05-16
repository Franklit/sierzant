<?php
$personName = get_field('field_608e90e87dd6e');
$personPosition = get_field('field_608e914edfe46');
$personImage = get_field('field_608e98cce77d3');

$personRepeater = 'field_608e92bedfe49';
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
                            $personTitle = get_sub_field('field_608e92dddfe4a');
                            $personDescription = get_sub_field('field_608e931adfe4c');
                            $personIcon = get_sub_field('field_608e92fcdfe4b');
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

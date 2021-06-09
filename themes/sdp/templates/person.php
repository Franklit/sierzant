<?php
$personName = get_field('field_60ad205e8f0bd');
$personSurname = get_field('field_60b28b30e29ed');
$personPosition = get_field('field_60ad206c8f0be');
$personImage = get_field('field_60ad20728f0bf');

$personRepeater = 'field_60ad20878f0c0';

$workHeighlightTitle = get_field('field_60b3537857c9f');
$workList = 'field_60b3538957ca0';

$linkedin= get_field('field_60b391d8f5ec6');
$mail = get_field('field_60b392eaf5ec7');

$workIcon = get_field('field_60bc940dce76b');
?>


<section class="person">
    <div class="person__container g-small-container">
        <div class="person__top">
            <div class="person__details">
                <?php if($personName):?>
                    <h2 class="person__name"><?php echo esc_html($personName);?> </h2>
                <?php endif;?>
                <?php if($personSurname):?>
                    <h2 class="person__name"><?php echo esc_html($personSurname);?> </h2>
                <?php endif;?>
                <?php if($personPosition):?>
                    <p class="person__positon"><?php echo esc_html($personPosition);?></p>
                <?php endif;?>
                <div class="person__icons">
                    <?php if($linkedin):?>
                        <a href="<?php echo $linkedin;?>" target="_blank" class="person__linkedin"></a>
                    <?php endif;?>
                    <?php if($mail):?>
                        <a href="mailto:<?php echo $mail;?>" class="person__mail"></a>
                    <?php endif;?>

                </div>

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
                        <div class="person__title-img-container">
                            <div class="person__title-container">
                            <?php if ($personIcon) : ?>
                                <?php echo wp_get_attachment_image($personIcon, 'large', false, ['class' => 'person__icon']); ?>
                            <?php endif; ?>

                            <?php if($personTitle):?>
                                <h2 class="person__title-icon"><?php echo esc_html($personTitle);?></h2>
                            <?php endif;?>
                            </div>
                            <?php if($personDescription):?>
                                <p class="person__title-description"><?php echo $personDescription;?></p>
                            <?php endif;?>
                           
                        </div>

                
                    <?php endwhile;?>
                
            </div>

        <?php endif; ?>
        
        <?php if($workHeighlightTitle):?>
            <div class="person__work-container">
                    <?php if ($workIcon) : ?>
                        <?php echo wp_get_attachment_image($workIcon, 'large', false, ['class' => 'person__icon']); ?>
                    <?php endif; ?>
                <h2 class="person__work-title"><?php echo esc_html($workHeighlightTitle);?></h2>
            </div>
        <?php endif;?>
        
        <?php if(have_rows($workList)): ?>
            <ul class="person__work-list">
                <?php while(have_rows($workList)): the_row();?>
                    <?php $listItem = get_sub_field('field_60b353ef57ca1');?>
                    <li class="person__work-listitem"><?php echo $listItem; ?></li>

                <?php endwhile;?>
            </ul>

        <?php endif;?>
    </div>


</section>

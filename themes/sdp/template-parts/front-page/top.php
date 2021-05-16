<?php 
$heading = get_field('field_609d48c7f3fed');
$subheading = get_field('field_609d48d3f3fee');
$description = get_field('field_609d48def3fef');
$img = get_field('field_609d48f1f3ff0');

?>

<section class="page-top">
    <div class="page-top__container g-container">
        <div class="page-top__innerContainer">
    
            <div class="page-top__content">
                <?php if($heading):?>
                    <h1 class="page-top__heading"> <?php echo esc_html($heading);?> </h1>
                <?php endif;?>
                <?php if($subheading):?>
                    <p class="page-top__subheading"><?php echo esc_html($subheading);?></p>
                <?php endif;?>
                <?php if($description):?>
                    <p class="page-top__description"><?php echo esc_html($description); ?></p>
                <?php endif;?>
            
            <a href="#" class="g-button page-top__button">Skontaktuj się</a>
            </div>
            <?php if($img) :?>
                <div class="page-top__imgContainer">
                    <?php echo wp_get_attachment_image($img, 'large', false, ['class' => 'page-top__image', 'loading' => false]); ?>
                </div>
            <?php endif;?>
                
        </div>
    </div>

</section>
<?php 
/* Template Name: Contact */
get_header();

?>



<?php 

    $contacHeading = get_field('field_60a287c052fcf');
    $contactDescription = get_field('field_60a287e052fd0');
    $contactImg = get_field('field_60a287ef52fd1');
    $contactDetails = get_field('field_60a2880452fd2');
    $formularHeding = get_field('field_60a2882052fd3');


    $contactTopImg = get_field('field_60a28fefbf454');
?>


<?php if ($contactTopImg) : ?>
    <?php echo wp_get_attachment_image($contactTopImg, 'large', false, ['class' => 'top-image-g']); ?>
<?php endif; ?>


<section class="contact g-container">
    <div class="contact__container">
            <?php if($contacHeading):?>
                <h2 class="contact__heading"><?php echo esc_html($contacHeading);?> </h2>
            <?php endif;?>
            <?php if($contactDescription):?>
                <p class="contact__decription"><?php echo esc_html($contactDescription);?></p>
            <?php endif;?>

            <div class="contact__details">

                <?php if ($contactImg): ?>
                        <?php echo wp_get_attachment_image($contactImg, 'large', false, ['class' => 'contact__img']); ?>
                <?php endif; ?>
                
                <?php if($contactDetails):?>
                    <div class="contact__details-description"><?php echo ($contactDetails);?></div>
                <?php endif;?>

            </div>

    </div>
    <div class="contact__formular">
        <?php if($formularHeding): ?>
            <h2 class="contact__forumlar-heading"><?php echo esc_html($formularHeding);?></h2>
            <?php echo do_shortcode('[contact-form-7 id="196" title="Contact"]'); ?>
        <?php endif;?>
    </div>
</section>


<?php
get_footer();
?>
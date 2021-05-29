<?php 
/* Template Name: Contact */
get_header();

?>



<?php 

    $contacHeading = get_field('field_60ad1e7298578');
    $contactDescription = get_field('field_60ad1e7a98579');
    $contactImg = get_field('field_60ad1e849857a');
    $contactDetails = get_field('field_60ad1e8b9857b');
    $formularHeding = get_field('field_60ad1ea19857c');


    $contactTopImg = get_field('field_60ad1eb19857d');
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
            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
        <?php endif;?>
    </div>
</section>


<?php
get_footer();
?>
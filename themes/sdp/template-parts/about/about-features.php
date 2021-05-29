<?php 

$headingAbout = get_field('field_60ad1aeff8d1d');
$featuresAbout = 'field_60ad1b14f8d1e';



?>



<section class="aboutus-features">
  <div class="aboutus-features__container g-container">
    <?php if(have_rows($featuresAbout)):?>
        <h2 class="aboutus-features__heading"><?php echo esc_html($headingAbout);?></h2>
        <div class="aboutus-features__boxes">
            <?php while(have_rows($featuresAbout)): the_row();?>
                <div class="aboutus-features__box">
                <?php 
                    $img = get_sub_field('field_60ad1b23f8d1f');
                    $title = get_sub_field('field_60ad1b42f8d20');
                    $text = get_sub_field('field_60ad1b48f8d21');
                ?>
                <?php if ($img) : ?>
                    <?php echo wp_get_attachment_image($img, 'large', false, ['class' => 'aboutus-features__img']); ?>
                <?php endif; ?>
                <?php if($title):?>
                    <h3 class="aboutus-features__title"><?php echo esc_html($title);?></h3>
                <?php endif;?>
                <?php if($text):?>
                    <p class="aboutus-features__text"><?php echo esc_html($text);?></p>
                <?php endif;?>

                </div>
            <?php endwhile;?>
        </div>

    <?php endif;?>


  </div>
</section>
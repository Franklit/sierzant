<?php 

/* Template Name: People */
get_header();

$peopleHeading = get_field('field_608e5916ca8b8');
$peopleUnderHeading = get_field('field_608e5957ca8b9');

$peopleBoxes = 'field_608e5971ca8ba';

?>



<section class="people">
    <div class="people__container g-container">
    
        <?php if($peopleHeading) :?>
            <h2 class="people__heading"> <?php echo esc_html($peopleHeading);?></h2>
        <?php endif;?>
        <?php if($peopleUnderHeading):?>
            <p class="people__underHeading"><?php echo esc_html($peopleUnderHeading);?></p>
        <?php endif;?>
            
        <?php if(have_rows($peopleBoxes)):?>
            <?php while(have_rows($peopleBoxes)): the_row(); ?>

                <?php 
                    $peopleImg = get_sub_field('field_608e5990ca8bb');
                    $peopleName = get_sub_field('field_608e59b6ca8bc');
                    $peoplePosition = get_sub_field('field_608e5a29ca8bd');
                    $peopleSpecialization = get_sub_field('field_608e5a45ca8be');
                ?>

                <div class="people__personBox">
                    <?php if($peopleImg):?>
                        <?php echo wp_get_attachment_image($peopleImg, 'large', false, ['class' => 'people__img']);?>
                    <?php endif;?>
                    <?php if($peopleName):?>
                        <h4 class="peopleName"><?php echo esc_html($peopleName);?></h4>
                    <?php endif;?>
                    <?php if($peoplePosition):?>
                        <p class="peoplePosition"><?php echo esc_html($peoplePosition);?></p>
                    <?php endif;?>
                    <?php if($peopleSpecialization):?>
                        <p class="peopleSpecialization"><?php echo esc_html($peopleSpecialization);?></p>
                    <?php endif;?>
                </div>

            <?php endwhile;?>

        <?php endif; ?>
    
    </div>

</section>






<?php
get_footer();
?>
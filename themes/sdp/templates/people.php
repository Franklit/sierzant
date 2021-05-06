<?php 

/* Template Name: People */
get_header();

$peopleHeading = get_field('field_608e5916ca8b8');
$peopleUnderHeading = get_field('field_608e5957ca8b9');
$peopleBoxes = 'field_608e5971ca8ba';
$people = get_field('field_6091534b8202b');
$peopleHeading = get_field('field_608e5916ca8b8');
$peopleHeadingUnder = get_field('field_608e5916ca8b8');

?>

<section class="people">
    <div class="people__container g-container">
        <div class="people__boxes">
            <?php if($peopleHeading) :?>
                <h2 class="people__heading"> <?php echo esc_html($peopleHeading);?></h2>
            <?php endif;?>

            <?php if($peopleHeadingUnder):?>
                <p class="people__underHeading"><?php echo esc_html($peopleHeadingUnder);?></p>
            <?php endif;?>

            <?php foreach($people as $person): ?>
                <?php 
                    $position = get_field('field_608e914edfe46', $person->ID ); 
                    $specialty = get_field('field_60917c53dc02f', $person->ID);
                ?>
                    <a href="<?php echo esc_url(get_page_link($person->ID)); ?>" class="people__personBox">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url($person->ID));?>" alt="" class="people__img">
                        <div class="people__description">
                            <h4 class="peopleName"><?php echo esc_html($person-> post_title);?></h4>
                            <p class="peoplePosition"><?php echo esc_html($position);?></p>
                            <p class="peopleSpecialization"><?php echo esc_html($specialty);?></p>
                        </div>
                    </a>
            <?php endforeach;?>
        </div>
    </div>
 </section>

<?php
get_footer();
?>
<?php 

/* Template Name: People */
get_header();

$peopleHeading = get_field('field_60ad22159731f');
// $peopleBoxes = 'field_608e5971ca8ba';
$people = get_field('field_60ad228397321');
$peopleHeadingUnder = get_field('field_60ad221d97320');

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
                    $position = get_field('field_60ad206c8f0be', $person->ID ); 
                    $specialty = get_field('field_60ad23773ea05', $person->ID);
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
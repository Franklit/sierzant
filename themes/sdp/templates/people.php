<?php 

/* Template Name: People */
get_header();

$peopleHeading = get_field('field_608e5916ca8b8');
$peopleUnderHeading = get_field('field_608e5957ca8b9');

$peopleBoxes = 'field_608e5971ca8ba';

?>




<?php 

$people = get_field('field_6091534b8202b');



?>



<section class="people">
    <div class="people__container g-container">
        <div class="people__boxes">
<?php foreach($people as $person): ?>

    <?php 
        $position = get_field('field_608e914edfe46', $person->ID );    
    ?>
        <a href="#" class="people__personBox">
            <img src="<?php echo get_the_post_thumbnail_url($person->ID);?>" alt="" class="people__img">
            <div class="people__description">

                <h4 class="peopleName"><?php echo $person-> post_title;?></h4>

                <p class="peoplePosition"><?php echo $position;?></p>

            </div>

        </a>
        <?php endforeach;?>
    </div>

</div>
 
 </section>




<?php
get_footer();
?>
<?php 

/* Template Name: aboutUs */
get_header();

?>


<?php 
$img_about = get_field('field_60a28235624df');


?>


<?php if ($img_about) : ?>
    <?php echo wp_get_attachment_image($img_about, 'large', false, ['class' => 'top-image-g']); ?>
<?php endif; ?>



<?php get_template_part('template-parts/about/about-features');?>
<?php get_template_part('template-parts/about/about-whywe');?>










<?php
get_footer();
?>
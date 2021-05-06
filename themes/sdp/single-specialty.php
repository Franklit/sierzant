<?php 
get_header();
 
    $specialization = 'field_6092bc85e7246';
?>

<h2><?php the_title();?></h2>
<p><?php the_content();?></p>


<?php if(have_rows($specialization)): ?>
    <ul>
    <?php while(have_rows($specialization)): the_row();?>
        <?php     $specializationItem = get_sub_field('field_6092bca6e7247');?>

        <li><?php echo $specializationItem; ?></li>
    <?php endwhile;?>
    </ul>
<?php endif; ?>



<?php get_footer();?>
<?php 

/* Template Name: aboutUs */
get_header();

?>

<h2><?php the_title();?></h2>


<p><?php the_content();?></p>



<?php query_posts('post_type=specialty'); ?>
  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <!-- Stuff happening inside the loop -->
    <h1><?php the_title();?></h1>

  <?php endwhile; endif; ?>
<?php wp_reset_query(); ?>




<?php
get_footer();
?>
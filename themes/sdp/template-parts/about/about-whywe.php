
<?php 
// $pageThumbnail =

?>

<section class="aboutus-whywe">
    <div class="aboutus-whywe__container g-container">
        
        <div class="aboutus-whywe__description">
            <?php the_content();?>
        </div>
        <div class="aboutus-whywe__imgContainer">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'aboutus-whywe__img']);?>
        </div>
    </div>
</section>
<?php 
    $headingDesc = get_field('field_60a162eada045');
    $theContent = get_the_content();
    $textAboveList = get_field('field_6093eb2b8949e');
    $list = 'field_6093eb508949f';
    $textUnderList = get_field('field_6093eb73894a1');
?>

<section class="front-desc g-container">

    <div class="front-desc__content ">

        <?php if($headingDesc):?>
            <h2 class="front-desc__heading"><?php echo esc_html($headingDesc);?></h2>
        <?php endif;?>

        <?php if($theContent):?>
            <div class="front-desc__description">
                    <?php echo esc_html(the_content()); ?>
            </div>
        <?php endif;?>

        <?php if($textAboveList):?>
                <p class="front-desc__listTitle">
                        <?php echo esc_html($textAboveList);?>
                </p>
            <?php endif;?>

        <?php if(have_rows($list)):?>
                <ul class="front-desc__list">
                        <?php while(have_rows($list)): the_row();?>
                        <?php 
                                $listItem = get_sub_field('field_6093eb64894a0');
                        ?>
                                <li class="front-desc__listItem">
                                        <?php echo esc_html($listItem);?>
                                </li>
                        <?php endwhile;?>
                </ul>
        <?php endif;?>
        <?php if($textUnderList):?>
            <p class="front-desc__textAfterList">
                    <?php echo $textUnderList;?>
            </p>
        <?php endif;?>
        <!-- <div class="front-desc__button">
            <a href="<?php //echo the_permalink();?>" class="g-button g-button--<?php //echo esc_attr($i++ % 2 == 0 ? 'theme' : 'dark'); ?>"><span> Zobacz wiecej </span></a>
        </div> -->
    </div>

</section>
<?php 
    $headingDesc = get_field('field_60ad181aef8ef');
    $theContent = get_the_content();
    $textAboveList = get_field('field_60ad1832ef8f0');
    $list = 'field_60ad184bef8f1';
    $textUnderList = get_field('field_60ad1860ef8f2');
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
                                $listItem = get_sub_field('field_60ad187def8f3');
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
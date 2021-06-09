
    <?php 
        $number = get_field('field_60afcef77e883', 'option');
        $mail = get_field('field_60afcf0c7e884', 'option');
        $adres = get_field('field_60afcf127e885', 'option');

        $headingAboveFooter = get_field('field_60b21155e83c3', 'option');
        $textAboveFooter = get_field('field_60b2116fe83c4', 'option');
        $textButtonAboveFooter = get_field('field_60b21175e83c5', 'option');
        $linkButtonAboveFooter = get_field('field_60b21400fcce7', 'option');

        $headingAboveFooterContact = get_field('field_60b214a8fd760');
        $textAboveFooterContact = get_field('field_60b215a869d45');
        $textButtonAboveFooterContact = get_field('field_60b2150efd762');
        $linkButtonAboveFooterContact = get_field('field_60b2153586dfc');

        $logoFooter= get_field('field_60b89a6d93cd6', 'option');
        $allrights = get_field('field_60b89a7c93cd7', 'option');



    ?>
    

    <div class="beforefooter">
        <div class="beforefooter__box">
            <?php if(!is_page_template('templates/contact.php')):?>
                <?php if($headingAboveFooter):?>
                    <h3 class="beforefooter__heading"><?php echo esc_html($headingAboveFooter);?></h3>
                <?php endif;?>
                <?php if($textAboveFooter):?>
                    <p class="beforefooter__text"><?php echo esc_html($textAboveFooter);?></p>
                <?php endif;?>
                <?php if($textButtonAboveFooter):?>
                    <a href="<?php echo esc_url($linkButtonAboveFooter);?>" class="g-button beforefooter__button "> <?php echo esc_html($textButtonAboveFooter);?></a>
                <?php endif;?>
            <?php else: ?>
                <?php if($headingAboveFooterContact):?>
                    <h3 class="beforefooter__heading"><?php echo esc_html($headingAboveFooterContact);?></h3>
                <?php endif;?>
                <?php if($textAboveFooterContact):?>
                    <p class="beforefooter__text"><?php echo esc_html($textAboveFooterContact);?></p>
                <?php endif;?>
                <?php if($textButtonAboveFooterContact):?>
                    <a href="<?php echo esc_url($linkButtonAboveFooterContact);?>" class="g-button beforefooter__button "> <?php echo esc_html($textButtonAboveFooterContact);?></a>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
    <footer>
            <div class="footer__top">
                <div class="footer__informations">
                    <?php if($number):?>
                        <p class="footer__number"><?php echo esc_html($number); ?></p>
                    <?php endif;?>
                    <?php if($mail):?>
                        <p class="footer__mail"><?php echo esc_html($mail); ?></p>
                    <?php endif;?>
                    <?php if($adres):?>
                        <div class="footer__adress">
                            <?php echo $adres;?>
                        </div>
                    <?php endif;?>
           
                </div>
                <div class="footer__bigfoto">

                    <img   src="http://localhost/sdp/wp-content/uploads/2021/05/mapa-copyy.jpg" alt="">
                </div>
            </div>
            <div class="footer__bottom">
            <?php if ($logoFooter) : ?>
                <?php echo wp_get_attachment_image($logoFooter, 'large', false, ['class' => 'footer_img']); ?>
            <?php endif; ?>
            <?php if($allrights):?>
                <p class="footer__allrights"><?php echo esc_html($allrights)?></p>
            <?php endif;?>
            </div>
    </footer>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>



<?php
wp_nav_menu( array( 
    'theme_location' => 'navigation-menu', 
    'container' => false,
    'menu_class' => 'navigation-menu__ul',
     )); 
?>



<?php if(!is_page_template('templates/expertise.php')):?>
    <div class="navigation-menu__mega-menu navigation-menu__mega-menu--hover">
        <?php if( is_active_sidebar('page-sidebar')): ?>
            <?php dynamic_sidebar('page-sidebar');?>
        <?php endif;?>
    </div>

<?php endif;?>
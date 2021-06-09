<?php 
get_template_part('template-parts/head');

$logoHeader = get_field('field_60b89a3893cd3', 'option')

?>

<body>

<div class="site-container">



<header class="site-header">
        <a href="<?php echo home_url();?>">

        
        <?php if ($logoHeader) : ?>
            <?php echo wp_get_attachment_image($logoHeader, 'large', false, ['class' => 'site-header__img']); ?>
        <?php endif; ?>
        </a>
        <?php if(!is_page_template('templates/expertise.php')):?>
        <nav class="navigation-menu">
        <?php else:?>
        <nav class="navigation-menu navigation-menu__expertise"> 
        <?php endif;?>
            <?php get_template_part('template-parts/site-header/site-nav'); ?>
        </nav>
        
        <!-- <img src="https://cleandye.com/wp-content/uploads/2020/01/Deutsch-icon.png" alt="" class="site-header__language"> -->
        <button class="hamburger g-cleared-button ">
            <span class="hamburgerIcon hamburgerIcon--top"></span>
            <span class="hamburgerIcon hamburgerIcon--middle"></span>
            <span class="hamburgerIcon hamburgerIcon--bottom"></span>
        </button>
</header>
    
<div class="site_content">







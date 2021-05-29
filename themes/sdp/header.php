<?php 
get_template_part('template-parts/head');

?>

<body>

<div class="site-container">

 

<header class="site-header">
        <a href="<?php echo home_url();?>">
        <img src="http://localhost/sdp/wp-content/uploads/2021/05/LOGO_SDP_short_dark.jpg" alt="" class="site-header__img">
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







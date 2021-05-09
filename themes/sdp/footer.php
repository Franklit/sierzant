        <footer>
            <img src="http://localhost/sierzant/wp-content/uploads/2021/05/Block.one-Homepage.jpg" alt="" class="footer_img">
            

            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'footer-menu', 
                    'container' => false,
                    'menu_class' => 'footer-menu__ul',
                    )); 
            ?>

        </footer>
        

    </div>
    
</div>

<?php wp_footer(); ?>

</body>
</html>


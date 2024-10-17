<nav class="header_nav">
    <div class="logo">
        <a href="<?php echo get_site_url( ) ?>">
            <h2>Portfolio</h2>
        </a>
    </div>
    <div class="menu">
        <?php
        wp_nav_menu( array('theme_location' => 'header') )
        ?>
        <div class="reseaux_sociaux">
            <a class="social-btn" href="https://github.com/LouisErvay">
                <i class="fa-brands fa-github fa-2x"></i>
            </a>
            <a class="social-btn" href="#">
            <i class="fa-brands fa-linkedin fa-2x"></i>
            </a>
        </div>
    </div>
</nav>
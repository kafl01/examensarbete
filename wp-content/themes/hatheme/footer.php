</main>
<?php wp_footer(); ?>

<nav class="navbar-footer">
    <div id="contact">
        <img src="<?php echo get_theme_file_uri('/images/Logo2.png') ?>">
        <p>Herman Andersson</p>
        <p>070-653 12 44</p>
        <p>herman.andersson@telia.com</p>
    </div>
    <div>
        <img src="<?php echo get_theme_file_uri('/images/pensil1.jpeg') ?>">
    </div>
    <div class="footer-nav">
        <?php wp_nav_menu(
            array(
                'menu' => 'footer',
                'container' => '',
                'theme_location' => 'footer',
                'items_wrap' => '<ul class="nav-list-footer">%3$s</ul>'
            )
        ); ?>
    </div>
</nav>
</body>

</html>
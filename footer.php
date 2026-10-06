<footer class="site-footer">

    <div class="container">

        <div class="footer-inner">

            <div class="footer-brand">
                <h2>BlogNova</h2>
                <p>Ideas • Learn • Grow</p>
            </div>


            <nav aria-label="Footer Menu">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'fallback_cb'    => false,
                ));
                ?>

            </nav>

        </div>


        <p class="copyright">
            © <?php echo esc_html(date('Y')); ?>
            BlogNova. All rights reserved.
        </p>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
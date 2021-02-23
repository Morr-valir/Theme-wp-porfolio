</main>
	</div>
   <!--Footer du site-->
    <footer>
        <span>Coryright Matth D's</span>
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        <a href="https://www.facebook.com/matthieu.picard.925"><i class="fab fa-facebook-square"></i></a>
        <?php wp_footer(); ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    </footer>
</body>
</html>
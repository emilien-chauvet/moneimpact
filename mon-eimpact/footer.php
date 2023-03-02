    
    <hr>
    <footer>
        Ceci est le footer

        <?php
            wp_nav_menu(
              array(
                'theme_location' => 'top_menu', // choix du menu
                'container' => 'ul', // éviter d'avoir une div autour mais une balise HTML ul
                'menu_class' => 'header_menu', // ma classe personnalisée CSS
              )
            );
        ?>

    </footer>
    <?php wp_footer(); ?>

    <!-- script google possiblement ici -->
    </body>
</html>
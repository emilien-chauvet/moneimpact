<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <?php wp_head(); ?>
  </head>

  <body id="body" <?php body_class(); ?>>
    <header class="header">

        Ceci est le header <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoMonEImpact.svg" alt="Logo mon e-impact">

        <?php
            wp_nav_menu(
              array(
                'theme_location' => 'top_menu', // choix du menu
                'container' => 'ul', // éviter d'avoir une div autour mais une balise HTML ul
                'menu_class' => 'header_menu', // ma classe personnalisée CSS
              )
            );
        ?>

    </header>

    <hr>

    <?php wp_body_open(); ?>
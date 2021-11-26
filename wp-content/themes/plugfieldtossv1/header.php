<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title><?php wp_title('|'); ?></title>

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/image/plugifield-favicon.png" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/_carousel/package/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/_carousel/css/styles.css">

  <!-- Inicio Wordpress Header -->
	<?php wp_head(); ?>
	<!-- Final Wordpress Header -->

  </head>

  <body>

    <nav  role="navigation">
      <div class="nav-wrapper">

        <!-- LOGO -->
        <a id="logo-container" href="/" class="brand-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/plugifield-marca-v3.png" alt="<?php bloginfo('name'); ?> | <?php the_title(); ?>" title="<?php bloginfo('name'); ?> | <?php the_title(); ?>" />
        </a>
        <!-- Fecha LOGO -->

        <!-- MENU -->
        <ul class="conversar right">
          <li><a href="https://plugfield.com.br/contato/">Contato</li>
        </ul>

        <div class="hide-on-med-and-down right">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>

        <div id="nav-mobile" class="sidenav">
          <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
        </div>

        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <!-- Fecha MENU -->

      </div>
    </nav><!-- #site-navigation -->

<?php
/**
 * Header principal del tema
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="logo-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.jpg" alt="Logo" class="logo" />
      <span class="nombre-tienda">La Casita del Bebé</span>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
        <li><a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>">Tienda</a></li>
        <li><a href="<?php echo esc_url( home_url( '/quienes-somos' ) ); ?>">Quiénes Somos</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>">Contacto</a></li>
        <li>
          <div class="cart-button-wrapper">
            <a href="<?php echo wc_get_cart_url(); ?>">🛒</a>
            <span class="cart-badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
          </div>
        </li>
      </ul>
    </nav>
  </header>

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
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/logo.jpg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
    body, html, .woocommerce-page {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif !important;
      background-color: #fff !important;
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/background.jpg') !important;
      background-repeat: repeat !important;
      background-size: auto !important;
    }

    header.site-header {
      background: linear-gradient(270deg, #d6b4f3, #eacdfc, #d6b4f3);
      background-size: 600% 600%;
      animation: flowGradient 60s ease infinite;
      padding: 1.2rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      border-bottom: none;
      box-shadow: none;
    }

    @keyframes flowGradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .logo-container {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo {
      height: 40px !important;
      max-height: 40px !important;
      width: auto;
      border-radius: 50%;
    }

    .nombre-tienda {
      font-size: 1.6rem;
      font-weight: bold;
      color: #a84cd7;
    }

    nav ul {
      display: flex;
      gap: 1.5rem;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav ul li a {
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      color: #333;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #a84cd7;
    }

    .cart-button-wrapper {
      position: relative;
      display: inline-block;
    }

    .cart-badge {
      position: absolute;
      top: -6px;
      right: -10px;
      background: red;
      color: white;
      border-radius: 50%;
      padding: 1px 5px;
      font-size: 10px;
      font-weight: bold;
      min-width: 18px;
      text-align: center;
    }
  </style>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
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
            <span class="cart-badge">
              <?php echo WC()->cart->get_cart_contents_count(); ?>
            </span>
          </div>
        </li>
      </ul>
    </nav>
  </header>

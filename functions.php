<?php
/**
 * Funciones principales del tema
 */

// Cargar estilos y scripts
function casita_enqueue_scripts() {
  wp_enqueue_style('casita-style', get_stylesheet_uri());
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'casita_enqueue_scripts');

// Habilitar soporte para thumbnails y WooCommerce
function casita_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'casita_theme_setup');

// Registrar menú
function casita_register_menus() {
  register_nav_menus(array(
    'menu-principal' => __('Menú Principal', 'casita')
  ));
}
add_action('init', 'casita_register_menus');

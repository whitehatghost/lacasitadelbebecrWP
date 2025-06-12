<?php
/**
 * Template Name: Tienda Estática + WooCommerce
 */
get_header();

// Cargar el archivo HTML externo
$html_path = get_template_directory() . '/tienda.html';
if (file_exists($html_path)) {
    echo file_get_contents($html_path);
} else {
    echo '<div style="padding: 2rem; text-align: center; font-size: 1.2rem; color: red;">No se encontró el archivo tienda.html en la raíz del tema.</div>';
}

// Mostrar los productos de WooCommerce si está activo
if (class_exists('WooCommerce')) {
    echo '<section class="woocommerce-products" style="padding: 2rem; max-width: 1200px; margin: auto;">';
    echo do_shortcode('[products limit="12" columns="4" paginate="true"]');
    echo '</section>';
}

get_footer();

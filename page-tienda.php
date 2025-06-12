<?php
/**
 * Template Name: Tienda Estática + Productos
 */

get_header();

// Carga el HTML externo de la tienda personalizado (debe estar en la raíz del tema)
$html_path = get_template_directory() . '/tienda.html';
if (file_exists($html_path)) {
    echo file_get_contents($html_path);
} else {
    echo '<div style="padding: 2rem; text-align: center; font-size: 1.2rem; color: red;">No se encontró el archivo tienda.html en la raíz del tema.</div>';
}

// Mostrar productos de WooCommerce (loop de la tienda)
if ( function_exists('woocommerce_content') ) {
    echo '<div class="woocommerce-products" style="padding: 3rem; max-width: 1200px; margin: auto">';
    woocommerce_content();
    echo '</div>';
}

get_footer();

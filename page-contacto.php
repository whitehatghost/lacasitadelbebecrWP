<?php
/**
 * Template Name: Contacto Estático
 */
get_header();

// Cargar HTML desde la raíz del tema (no dentro de /assets):
$html_path = get_template_directory() . '/contacto.html';
if (file_exists($html_path)) {
    echo file_get_contents($html_path);
} else {
    echo '<div style="padding: 2rem; text-align: center; font-size: 1.2rem; color: red;">No se encontró el archivo contacto.html en la raíz del tema.</div>';
}

get_footer();

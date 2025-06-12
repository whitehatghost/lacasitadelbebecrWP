<?php
/**
 * Template Name: Quiénes Somos Estático
 */
get_header();

// Carga el HTML externo directamente desde la raíz del tema:
$html_path = get_template_directory() . '/quienes-somos.html';
if (file_exists($html_path)) {
    echo file_get_contents($html_path);
} else {
    echo '<div style="padding: 2rem; text-align: center; font-size: 1.2rem; color: red;">No se encontró el archivo quienes-somos.html en la raíz del tema.</div>';
}

get_footer();

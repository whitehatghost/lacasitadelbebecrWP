<?php
/**
 * Template Name: Contacto Estático
 */

get_header();

$contacto_file = get_template_directory() . '/assets/contacto.html';
if (file_exists($contacto_file)) {
    echo file_get_contents($contacto_file);
} else {
    echo '<p style="text-align:center;color:red;margin-top:40px;">El archivo contacto.html no se encuentra en /assets</p>';
}

get_footer();

<?php
/**
 * Template Name: Página de Inicio Personalizada
 */
get_header(); ?>

<main class="site-main">
  <?php
  // Cargar el contenido estático directamente desde un archivo HTML subido
  $custom_html = get_template_directory() . '/index.html';
  if (file_exists($custom_html)) {
    echo file_get_contents($custom_html);
  } else {
    echo '<p>Archivo index.html no encontrado en el tema.</p>';
  }
  ?>
</main>

<?php get_footer(); ?>

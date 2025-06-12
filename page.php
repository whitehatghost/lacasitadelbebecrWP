<?php
/**
 * Template genérico para páginas (incluye carrito, contacto, etc.)
 */

get_header(); ?>

<main class="contenido-pagina" style="max-width: 1200px; margin: auto; padding: 2rem;">
  <?php
  while (have_posts()) : the_post();
    the_content();
  endwhile;
  ?>
</main>

<?php get_footer(); ?>

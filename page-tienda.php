<?php
/**
 * Template Name: Tienda Personalizada
 */
get_header();
?>

<main class="site-main">
  <?php
    // Incluir el HTML personalizado de /assets/tienda.html
    $custom_html_path = get_template_directory() . '/assets/tienda.html';
    if (file_exists($custom_html_path)) {
      include($custom_html_path);
    }
  ?>

  <section class="woocommerce-products">
    <?php
      // Mostrar productos de WooCommerce
      echo do_shortcode('[products limit="12" columns="4" paginate="true"]');
    ?>
  </section>
</main>

<?php get_footer(); ?>

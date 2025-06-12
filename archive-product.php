<?php
/**
 * Template para la tienda de WooCommerce
 */
get_header();
?>

<main class="woocommerce-content" style="padding: 2rem; max-width: 1200px; margin: auto;">
  <?php woocommerce_content(); ?>
</main>

<?php get_footer(); ?>

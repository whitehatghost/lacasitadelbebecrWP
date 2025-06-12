<?php
/**
 * Front Page Template
 * Template para la portada principal de La Casita del Bebé
 */
get_header();
?>

<main>
  <section class="hero-box">
    <h1>✨ Descubrí lo mejor para tu bebé</h1>
    <p><strong>En <span style="color:#b38fd4">La Casita del Bebé</span></strong> cuidamos cada detalle para ofrecerte productos encantadores, seguros y funcionales. Desde <em>cochecitos ergonómicos</em> hasta <em>juguetes educativos</em> que acompañan cada etapa del crecimiento.</p>
    <p>Viví la experiencia de comprar con amor, confianza y estilo. ❤️</p>
  </section>

  <section class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/banner1.png" alt="Banner Envíos" style="width:100%; border-radius:20px; margin-top: 30px;">
  </section>

  <section class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/banner2.png" alt="Banner Bebé" style="width:100%; border-radius:20px; margin-top: 30px;">
  </section>

  <section class="baby-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/bebe.jpg" alt="Productos bebé" style="width:100%; margin-top:40px; border-radius: 20px;">
  </section>

  <section class="section-box">
    <h2>🌟 La mejor calidad y servicio</h2>
    <p>Nos enorgullece ofrecer productos certificados y atención personalizada para cada familia. 💖 Contamos con asesoría online, seguimiento postventa y opciones de pago flexibles.</p>
  </section>

  <section class="benefits" style="display:flex; flex-wrap:wrap; justify-content:space-around; gap:2rem; margin: 40px auto; max-width: 1000px;">
    <div><img src="<?php echo get_template_directory_uri(); ?>/assets/envio-gratis.png" alt="Envío" width="120"></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/assets/cuotas.png" alt="Cuotas" width="120"></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/assets/garantia.png" alt="Garantía" width="120"></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/assets/marcas.png" alt="Marcas" width="120"></div>
  </section>

  <section class="section-box">
    <h2>🎉 Gracias por visitarnos</h2>
    <p>La Casita del Bebé es más que una tienda, es una experiencia pensada para los papás y mamás de Costa Rica. Nos encanta ayudarte a cuidar lo que más amás. 💕</p>
  </section>
</main>

<?php get_footer(); ?>

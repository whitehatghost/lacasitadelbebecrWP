<?php
/*
Template Name: Front Page
*/
get_header();
?>

<!-- Banner Principal -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/banner.jpg" alt="Banner Grande" class="banner-grande">
<img src="<?php echo get_template_directory_uri(); ?>/assets/banner2.jpg" alt="Banner 2" class="banner2">

<!-- Intro -->
<section class="intro-section">
  <h2>✨ Descubrí lo mejor para tu bebé</h2>
  <p>
    En <strong>La Casita del Bebé</strong> cuidamos cada detalle para ofrecerte productos encantadores, seguros y funcionales. Desde <em>cochecitos ergonómicos</em> hasta <em>juguetes educativos</em> que acompañan cada etapa del crecimiento. <br><br>
    Viví la experiencia de comprar con amor, confianza y estilo.
  </p>
</section>

<!-- Carrusel -->
<div class="carousel" id="carousel">
  <div class="carousel-inner" id="carouselInner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/carrusel1.jpg" alt="Imagen 1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/carrusel2.jpg" alt="Imagen 2">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/carrusel3.jpg" alt="Imagen 3">
  </div>
  <div class="carousel-controls">
    <button class="control" onclick="prevSlide()">&#10094;</button>
    <button class="control" onclick="nextSlide()">&#10095;</button>
  </div>
  <div class="dots" id="dots"></div>
</div>

<!-- Calidad -->
<section class="extra-content">
  <h2>🌟 La mejor calidad y servicio</h2>
  <p>Nos enorgullece ofrecer productos certificados y atención personalizada para cada familia. Contamos con asesoría online, seguimiento postventa y opciones de pago flexibles.</p>
</section>

<!-- Burbuja chat -->
<div class="chat-bubble-help">
  💬 ¿Necesitás ayuda? <strong>Chateá con nosotros</strong>
</div>

<!-- Botones redes -->
<div class="social-floating-bar">
  <a href="https://wa.me/50684268083" class="social-button whatsapp" target="_blank" title="WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" />
  </a>
  <a href="https://www.facebook.com/CasitadelBebe1" class="social-button facebook" target="_blank" title="Facebook">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" />
  </a>
  <a href="https://www.instagram.com/lacasitadelbebe_cr" class="social-button instagram" target="_blank" title="Instagram">
    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" />
  </a>
</div>

<!-- Envio Gratis -->
<section class="shipping-info">
  🚚 ¡Envíos Gratis a todo el país y soporte personalizado en todas tus compras online!
</section>

<!-- Beneficios -->
<section class="benefits">
  <div class="benefit-item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-envio.png" alt="Envío gratis">
    <div class="benefit-title">Envío Gratis</div>
    <div class="benefit-text">A todo Costa Rica</div>
  </div>
  <div class="benefit-item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-cuotas.png" alt="Cuotas">
    <div class="benefit-title">Pagá en Cuotas</div>
    <div class="benefit-text">Hasta 3 cuotas sin interés</div>
  </div>
  <div class="benefit-item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-garantia.png" alt="Garantía">
    <div class="benefit-title">Garantía</div>
    <div class="benefit-text">En todos nuestros productos</div>
  </div>
  <div class="benefit-item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-marcas.png" alt="Marcas">
    <div class="benefit-title">Las Mejores Marcas</div>
    <div class="benefit-text">Artículos de calidad premium</div>
  </div>
</section>

<!-- Cierre -->
<section class="contenido-bb">
  <h2>🎉 Gracias por visitarnos</h2>
  <p>
    La Casita del Bebé es más que una tienda, es una experiencia pensada para los papás y mamás de Costa Rica. Nos encanta ayudarte a cuidar lo que más amás.
  </p>
</section>

<!-- Banner de pagos -->
<section class="payment-banner">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/pagos.jpg" alt="Métodos de Pago" />
</section>

<?php get_footer(); ?>

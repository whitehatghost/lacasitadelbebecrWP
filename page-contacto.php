<?php
/*
Template Name: Contacto
*/
get_header();
?>

<section class="contact-section">
  <h2 class="contact-title">Contáctanos</h2>
  <form class="contact-form" action="#" method="post">
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="email" placeholder="Tu correo electrónico" required>
    <textarea name="mensaje" placeholder="Escribí tu mensaje..." rows="6" required></textarea>
    <button type="submit">Enviar Mensaje</button>
  </form>
</section>

<!-- Banner de pagos -->
<section class="payment-banner">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/pagos.jpg" alt="Métodos de Pago" />
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

<?php get_footer(); ?>

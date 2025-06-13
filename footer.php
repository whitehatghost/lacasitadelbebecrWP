 </footer>

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

  <?php wp_footer(); ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Detectar si estamos en la página de tienda WooCommerce
  if ( document.body.classList.contains('post-type-archive-product') ||
       document.body.classList.contains('woocommerce-shop') ||
       document.body.classList.contains('tax-product_cat') ||
       document.body.classList.contains('archive') ) {
    // Esperar 300ms para asegurarse de que la burbuja ya esté inyectada
    setTimeout(function() {
      const bubble = document.querySelector('.wh-widget-send-button-wrapper, .wh-fixed-bottom-right');
      if (bubble) {
        bubble.remove();
        console.log('Burbuja de ayuda removida en tienda');
      }
    }, 300);
  }
});
</script>


</body>
</html>

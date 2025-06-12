<?php
/**
 * Template Name: Front Page
 * Description: Portada personalizada igual al estilo de lacasitadelbebecr.com
 */

get_header();
?>

<style>
  body {
    background: url('<?php echo get_template_directory_uri(); ?>/assets/bg-patrones.jpg') repeat;
    background-size: 350px;
  }
  .hero-box, .section-box {
    max-width: 850px;
    margin: 50px auto;
    background: linear-gradient(135deg, #d0cfff, #c2e9fb);
    padding: 2.5rem;
    border-radius: 25px;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: 'Poppins', sans-serif;
  }
  .hero-box h1, .section-box h2 {
    font-size: 2.3rem;
    color: #ff80ab;
    margin-bottom: 1.5rem;
  }
  .hero-box p, .section-box p {
    font-size: 1.2rem;
    color: #333;
    line-height: 1.8;
  }
  .social-floating-bar img {
    width: 40px;
    height: 40px;
    object-fit: contain;
  }
</style>

<section class="hero-box">
  <h1>✨ Descubrí lo mejor para tu bebé</h1>
  <p>
    En <strong>La Casita del Bebé</strong> cuidamos cada detalle para ofrecerte productos encantadores, seguros y funcionales. Desde <em>cochecitos ergonómicos</em> hasta <em>juguetes educativos</em> que acompañan cada etapa del crecimiento. 😊💕
    <br><br>
    Viví la experiencia de comprar con amor, confianza y estilo.
  </p>
</section>

<section class="section-box">
  <h2>🌟 La mejor calidad y servicio</h2>
  <p>
    Nos enorgullece ofrecer productos certificados y atención personalizada para cada familia. Contamos con asesoría online, seguimiento postventa y opciones de pago flexibles. 😍
  </p>
</section>

<section class="section-box">
  <h2>✨ Productos destacados</h2>
  <?php echo do_shortcode('[products limit="4" columns="4" orderby="date" order="DESC"]'); ?>
</section>

<section class="section-box">
  <h2>💖 Gracias por visitarnos</h2>
  <p>La Casita del Bebé es más que una tienda, es una experiencia pensada para vos y tu bebé – con mucho amor desde Costa Rica 🇰🇷.</p>
</section>

<?php get_footer(); ?>

<!DOCTYPE html>
<html lang="es">
<?php
    include_once 'includes/head.php'
    ?>

<!-- Hero con fondo de estrellas -->

<body>
    <?php include 'includes/header.php'; ?>

  <section class="hero is-fullheight" style="
  background:
  linear-gradient(rgba(0, 0, 32, 0.6), rgba(0, 0, 32, 0.6)),
  url('assets/img/stars-bg.jpg') no-repeat center center / cover;
  ">
  <div class="hero-body has-text-centered">
    <div class="container">
      <h1 class="title is-1 has-text-white" style="text-shadow: 0 2px 6px rgba(0,0,0,0.7);">
        Las Estrellas
      </h1>
      <h2 class="subtitle is-4 has-text-white" style="text-shadow: 0 1px 4px rgba(0,0,0,0.5); max-width: 600px; margin: 0 auto;">
        Cuerpos brillantes que nos iluminan desde millones de años luz.
      </h2>
      <a href="#contenido" class="button is-warning is-large mt-5">Conocer más</a>
    </div>
  </div>
  </section>

  <!-- Contenido principal -->
  <section id="contenido" class="section">
    <div class="container">
      <h2 class="title is-3 has-text-centered">Tipos de Estrellas</h2>
      <div class="columns is-multiline is-centered mt-5">
        <div class="column is-4">
          <div class="box has-text-centered">
            <div class="image-container" style="height: 200px; overflow: hidden; margin-bottom: 1rem;">
              <img src="assets/img/enana.jpg" alt="Enana Blanca" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h3 class="title is-5">Enanas Blancas</h3>
            <p>Estrellas moribundas muy densas que ya no producen energía.</p>
          </div>
        </div>
        <div class="column is-4">
          <div class="box has-text-centered">
            <div class="image-container" style="height: 200px; overflow: hidden; margin-bottom: 1rem;">
              <img src="assets/img/gigante.jpg"" alt=" Gigante Roja" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h3 class="title is-5">Gigantes Rojas</h3>
            <p>Estrellas evolucionadas que han agotado el hidrógeno en su núcleo.</p>
          </div>
        </div>
        <div class="column is-4">
          <div class="box has-text-centered">
            <div class="image-container" style="height: 200px; overflow: hidden; margin-bottom: 1rem;">
              <img src="assets/img/neutro.jpg"" alt=" Estrella de Neutrones" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h3 class="title is-5">Estrellas de Neutrones</h3>
            <p>Restos estelares ultra densos tras una supernova.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('includes/footer.php'); ?>



</body>
<
  </html>
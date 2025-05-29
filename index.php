<!DOCTYPE html>
<html lang="es">
<?php
    include_once 'includes/head.php'
    ?>

<body>
    <?php include 'includes/header.php'; ?>

<!-- HERO con imagen de fondo -->
<section class="hero is-fullheight is-dark is-bold" style="background-image: url('assets/img/espacio.jpg'); background-size: cover; background-position: center;">
  <div class="hero-body has-text-centered">
    <div class="container">
      <h1 class="title is-1 has-text-white has-text-weight-bold" style="text-shadow: 2px 2px 6px rgba(0,0,0,0.7);">
        Bienvenido al Universo
      </h1>
      <h2 class="subtitle is-4 has-text-white" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.6);">
        Explora los misterios del cosmos desde la comodidad de tu navegador.
      </h2>
      <a href="#secciones" class="button is-info is-large mt-5">
        Explorar secciones
      </a>
    </div>
  </div>
</section>

<!-- Secciones principales como tarjetas -->
<section class="section" id="secciones">
  <div class="container">
    <h3 class="title is-3 has-text-centered mb-6">Explora nuestras secciones</h3>
    <div class="columns is-multiline is-centered">
      <!-- Tarjeta 1 -->
      <div class="column is-4">
        <a href="historia.php" class="card hoverable">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="assets/img/historia.jpg" alt="Historia de la Astronomía">
            </figure>
          </div>
          <div class="card-content">
            <p class="title is-4">Historia de la Astronomía</p>
            <p>Desde los antiguos astrónomos hasta las teorías modernas.</p>
          </div>
        </a>
      </div>
      <!-- Tarjeta 2 -->
      <div class="column is-4">
        <a href="sistema-solar.php" class="card hoverable">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="assets/img/sistema-solar.jpg" alt="Sistema Solar">
            </figure>
          </div>
          <div class="card-content">
            <p class="title is-4">Sistema Solar</p>
            <p>Conoce los planetas, sus lunas y el Sol que nos da vida.</p>
          </div>
        </a>
      </div>
      <!-- Tarjeta 3 -->
      <div class="column is-4">
        <a href="estrellas.php" class="card hoverable">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="assets/img/estrellas.jpg" alt="Estrellas">
            </figure>
          </div>
          <div class="card-content">
            <p class="title is-4">Estrellas</p>
            <p>Tipos, ciclos de vida y curiosidades sobre las estrellas.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Video embebido -->
<section class="section has-background-light">
  <div class="container">
    <h3 class="title is-3 has-text-centered">Viaja al espacio con nosotros</h3>
    <div class="columns is-centered mt-4">
      <div class="column is-8">
        <div class="video-container">
          <video width="100%" height="450" controls>
            <source src="assets/video/video.mp4" type="video/mp4" />
            Tu navegador no soporta el elemento de video.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS adicional para efecto hover -->
<style>
  .card.hoverable:hover {
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    transform: translateY(-6px);
    transition: all 0.3s ease;
  }
  .video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
  }
  .video-container iframe {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
  }
</style>

<?php
require_once 'includes/footer.php';
?>

</body>
</html>

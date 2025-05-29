<?php
$pageTitle = "Historia de la Astronomía";
require_once 'includes/header.php';
?>

<!-- Hero con imagen -->
<section class="hero is-medium is-dark" style="background-image: url('assets/img/historia-banner.jpg'); background-size: cover; background-position: center;">
  <div class="hero-body has-text-centered">
    <div class="container">
      <h1 class="title is-1 has-text-white" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.6);">
        Historia de la Astronomía
      </h1>
      <h2 class="subtitle is-4 has-text-white" style="text-shadow: 1px 1px 6px rgba(0,0,0,0.5);">
        Una mirada a cómo las civilizaciones han entendido el cielo.
      </h2>
    </div>
  </div>
</section>

<!-- Línea de tiempo -->
<section class="section">
  <div class="container">
    <h3 class="title is-3 has-text-centered">Desde la antigüedad hasta hoy</h3>

    <div class="timeline is-centered mt-5">
      <header class="timeline-header">
        <span class="tag is-medium is-primary">Antigüedad</span>
      </header>

      <div class="timeline-item">
        <div class="timeline-marker is-info"></div>
        <div class="timeline-content">
          <p class="heading">3000 a.C. - Egipto y Babilonia</p>
          <p>Los egipcios usaban los cielos para guiar la agricultura. Los babilonios registraban eventos astronómicos en tablillas de arcilla.</p>
        </div>
      </div>

      <header class="timeline-header">
        <span class="tag is-medium is-warning">Edad Media</span>
      </header>

      <div class="timeline-item">
        <div class="timeline-marker is-warning"></div>
        <div class="timeline-content">
          <p class="heading">Siglo IX - Al-Ándalus y el mundo islámico</p>
          <p>Los astrónomos islámicos preservaron y expandieron el conocimiento griego. Se construyeron observatorios y se escribieron tratados fundamentales.</p>
        </div>
      </div>

      <header class="timeline-header">
        <span class="tag is-medium is-success">Renacimiento</span>
      </header>

      <div class="timeline-item">
        <div class="timeline-marker is-success"></div>
        <div class="timeline-content">
          <p class="heading">1543 - Copérnico</p>
          <p>Propone el modelo heliocéntrico: el Sol en el centro del sistema solar. Revoluciona el pensamiento científico.</p>
        </div>
      </div>

      <header class="timeline-header">
        <span class="tag is-medium is-danger">Era Moderna</span>
      </header>

      <div class="timeline-item">
        <div class="timeline-marker is-danger"></div>
        <div class="timeline-content">
          <p class="heading">Siglo XX y XXI</p>
          <p>El telescopio espacial Hubble, los radiotelescopios, los viajes a la Luna y el descubrimiento de exoplanetas marcan esta nueva era.</p>
        </div>
      </div>

      <div class="timeline-header">
        <span class="tag is-medium is-dark">Hoy</span>
      </div>
    </div>
  </div>
</section>

<!-- Imagen destacada -->
<section class="section has-background-light">
  <div class="container">
    <figure class="image is-3by1">
      <img src="assets/img/astronomos-antiguo.jpg" alt="Astrónomos antiguos observando el cielo">
    </figure>
  </div>
</section>

<!-- Video embebido -->
<section class="section">
  <div class="container">
    <h3 class="title is-3 has-text-centered">Documental: Historia del Universo</h3>
    <div class="columns is-centered mt-4">
      <div class="column is-8">
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/k43SP4p0x2M" title="Documental Historia del Universo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS adicional -->
<style>
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

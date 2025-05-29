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

<!-- Línea de tiempo con imagen integrada -->
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

      <header class="timeline-header">
        <span class="tag is-medium is-dark">Hoy</span>
      </header>
    </div>

    <!-- Imagen integrada al final de la línea de tiempo -->
    <figure class="image is-16by5 mt-5" style="max-width: 900px; margin: 0 auto;">
      <img src="assets/img/astronomos-antiguo.jpg" alt="Astrónomos antiguos observando el cielo" style="border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
      <figcaption class="has-text-centered mt-2 has-text-grey">
        Astrónomos antiguos observando el cielo estrellado, inspiración para siglos de descubrimientos.
      </figcaption>
    </figure>
  </div>
</section>

<!-- Nueva sección: Inventos clave -->
<section class="section has-background-primary-light">
  <div class="container">
    <h3 class="title is-3 has-text-centered has-text-primary-dark">Inventos clave en la Astronomía</h3>
    <div class="columns is-multiline mt-5">
      <div class="column is-4">
        <div class="box">
          <h4 class="title is-4">El Astrolabio</h4>
          <p>Instrumento usado desde la antigüedad para medir la altura de los astros sobre el horizonte y orientar a navegantes y astrónomos.</p>
        </div>
      </div>
      <div class="column is-4">
        <div class="box">
          <h4 class="title is-4">El Telescopio</h4>
          <p>Inventado en el siglo XVII, permitió observar con detalle los cuerpos celestes y fue clave para validar el modelo heliocéntrico.</p>
        </div>
      </div>
      <div class="column is-4">
        <div class="box">
          <h4 class="title is-4">El Espectroscopio</h4>
          <p>Herramienta que analiza la luz emitida por estrellas y planetas para determinar su composición y propiedades físicas.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Nueva sección: Astrónomos famosos -->
<section class="section">
  <div class="container">
    <h3 class="title is-3 has-text-centered">Astrónomos famosos y sus aportes</h3>
    <div class="content mt-5" style="max-width: 900px; margin: 0 auto;">
      <ul>
        <li><strong>Hiparco (190-120 a.C.)</strong>: Creó el primer catálogo de estrellas conocido y descubrió la precesión de los equinoccios.</li>
        <li><strong>Galileo Galilei (1564-1642)</strong>: Usó el telescopio para descubrir los satélites de Júpiter y las fases de Venus.</li>
        <li><strong>Edwin Hubble (1889-1953)</strong>: Demostró que el universo está en expansión, fundamentando la teoría del Big Bang.</li>
        <li><strong>Vera Rubin (1928-2016)</strong>: Pionera en la evidencia de la materia oscura mediante el estudio de la rotación de galaxias.</li>
      </ul>
    </div>
  </div>
</section>

<?php
require_once 'includes/footer.php';
?>

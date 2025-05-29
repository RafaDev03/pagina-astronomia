<?php
$pageTitle = "Sistema Solar";
require_once 'includes/header.php';
?>

<!-- Hero con fondo espacial oscuro para contraste mejorado -->
<section class="hero is-fullheight" style="
  background: 
    linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
    url('assets/img/space-bg.jpg') no-repeat center center / cover;
">
  <div class="hero-body has-text-centered">
    <div class="container">
      <h1 class="title is-1 has-text-white" style="text-shadow: 0 2px 6px rgba(0,0,0,0.7);">
        El Sistema Solar
      </h1>
      <h2 class="subtitle is-4 has-text-white" style="text-shadow: 0 1px 4px rgba(0,0,0,0.5); max-width: 600px; margin: 0 auto;">
        Un viaje fascinante a los planetas y cuerpos que orbitan alrededor del Sol.
      </h2>
      <a href="#planetas" class="button is-primary is-large mt-5">Explorar planetas</a>
    </div>
  </div>
</section>


<!-- Sección de planetas con carrusel (ahora filas con columnas) -->
<section id="planetas" class="section">
  <div class="container">
    <h3 class="title is-3 has-text-centered mb-6">Los Planetas del Sistema Solar</h3>
    <div class="columns is-multiline is-centered is-variable is-4" style="max-width: 900px; margin: 0 auto;">
      <!-- Cada planeta es una columna -->
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/mercurio.jpg" alt="Mercurio">
        </figure>
        <h4 class="title is-4 mt-3">Mercurio</h4>
        <p>El planeta más cercano al Sol, sin atmósfera y con temperaturas extremas que van de -180 °C a 430 °C.</p>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/venus.jpg" alt="Venus">
        </figure>
        <h4 class="title is-4 mt-3">Venus</h4>
        <p>El planeta más caliente del sistema solar por su atmósfera densa y efecto invernadero extremo.</p>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/tierra.jpg" alt="Tierra">
        </figure>
        <h4 class="title is-4 mt-3">Tierra</h4>
        <p>El único planeta conocido con vida y grandes cantidades de agua líquida en su superficie.</p>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/marte.jpg" alt="Marte">
        </figure>
        <h4 class="title is-4 mt-3">Marte</h4>
        <p>El planeta rojo, con evidencia de agua congelada y el objetivo de futuras misiones humanas.</p>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/jupiter.jpg" alt="Júpiter">
        </figure>
        <h4 class="title is-4 mt-3">Júpiter</h4>
        <p>El gigante gaseoso más grande, con la famosa Gran Mancha Roja, una tormenta gigante activa hace más de 300 años.</p>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/saturno.jpg" alt="Saturno">
        </figure>
        <h4 class="title is-4 mt-3">Saturno</h4>
        <p>Famoso por sus espectaculares anillos compuestos por hielo y roca, un verdadero espectáculo visual.</p>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/urano.jpg" alt="Urano">
        </figure>
        <h4 class="title is-4 mt-3">Urano</h4>
        <p>Un gigante helado con una inclinación axial única que causa estaciones extremas durante 20 años cada una.</p>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <figure class="image is-4by3">
          <img src="assets/img/neptuno.jpg" alt="Neptuno">
        </figure>
        <h4 class="title is-4 mt-3">Neptuno</h4>
        <p>El planeta más lejano, famoso por sus fuertes vientos y su brillante color azul.</p>
      </div>
    </div>
  </div>
</section>

<!-- Curiosidades con fondo oscuro y texto claro -->
<section class="section has-background-dark">
  <div class="container">
    <h3 class="title is-3 has-text-centered has-text-white mb-5" style="background-color: transparent;">
      Curiosidades del Sistema Solar
    </h3>
    <div class="columns is-multiline is-centered">
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">¿Sabías que Mercurio no tiene atmósfera?</h4>
          <p>Por eso las temperaturas varían desde -180 °C en la noche hasta 430 °C en el día.</p>
        </article>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">La Gran Mancha Roja de Júpiter</h4>
          <p>Es una tormenta gigante que ha estado activa por más de 300 años.</p>
        </article>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">Saturno no es el único con anillos</h4>
          <p>Urano y Neptuno también tienen sistemas de anillos, aunque menos visibles.</p>
        </article>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">Venus gira en sentido opuesto</h4>
          <p>Su rotación es retrógrada, girando al revés respecto a la mayoría de planetas.</p>
        </article>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">La Tierra tiene un campo magnético protector</h4>
          <p>Protege la vida de la radiación solar y permite la formación de auroras boreales.</p>
        </article>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">Marte tiene el volcán más grande</h4>
          <p>El Olympus Mons, tres veces más alto que el Everest.</p>
        </article>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">Urano es el planeta más frío</h4>
          <p>Su temperatura mínima puede llegar a -224 °C.</p>
        </article>
      </div>
      <div class="column is-4-tablet is-6-mobile">
        <article class="box has-text-centered" style="background-color: #222; color: #eee;">
          <h4 class="title is-4 has-text-white">Neptuno tiene vientos huracanados</h4>
          <p>Los más fuertes del sistema solar, alcanzando hasta 2.100 km/h.</p>
        </article>
      </div>
    </div>
  </div>
</section>

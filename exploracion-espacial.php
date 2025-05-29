<!DOCTYPE html>
<html lang="es">
<?php
    include_once 'includes/head.php'
    ?>
<body class="has-background-dark">

    <?php include 'includes/header.php'; ?>
    <section class="hero is-black">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-1 has-text-white">Exploración Espacial</h1>
                <h2 class="subtitle is-4 has-text-grey-light">Misiones que expanden nuestro conocimiento</h2>
            </div>
        </div>
    </section>

    <section class="section has-background-dark">
        <div class="container">
            <!-- Misión 1 -->
            <div class="box has-background-grey-darker mb-6">
                <div class="columns">
                    <div class="column is-4">
                        <figure class="image is-4by3">
                            <img src="https://images.unsplash.com/photo-1454789548928-9efd52dc4031?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Apollo 11">
                        </figure>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-warning">Apollo 11</h3>
                        <p class="subtitle is-5 has-text-grey-light">1969 - Primera misión tripulada a la Luna</p>
                        <div class="content has-text-white">
                            <p>Neil Armstrong y Buzz Aldrin se convirtieron en los primeros humanos en caminar sobre la superficie lunar el 20 de julio de 1969.</p>
                            <p class="mt-3"><span class="icon has-text-info"><i class="fas fa-user-astronaut"></i></span> Tripulación: Armstrong, Aldrin, Collins</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misión 2 -->
            <div class="box has-background-grey-darker">
                <div class="columns">
                    <div class="column is-4">
                        <figure class="image is-4by3">
                            <img src="https://images.unsplash.com/photo-1541873676-a18131494184?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Voyager">
                        </figure>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-info">Voyager 1 y 2</h3>
                        <p class="subtitle is-5 has-text-grey-light">1977 - Sondas interestelares</p>
                        <div class="content has-text-white">
                            <p>Las sondas Voyager han salido del Sistema Solar y llevan consigo el "Disco de Oro" con sonidos e imágenes de la Tierra.</p>
                            <p class="mt-3"><span class="icon has-text-success"><i class="fas fa-road"></i></span> Distancia actual: Más de 22 mil millones de km</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php'; ?>
</body>
</html>
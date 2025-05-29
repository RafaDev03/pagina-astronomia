<!DOCTYPE html>
<html lang="es">
<?php
    include_once 'includes/head.php'
    ?>
<body class="has-background-dark">

    <?php include 'includes/header.php'; ?>
    
    <section class="hero is-black is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-1 has-text-white mb-3">Exploración Espacial</h1>
                <div class="divider is-warning mx-auto" style="width: 100px; height: 3px; background: linear-gradient(90deg, transparent, #ffdd57, transparent);"></div>
                <h2 class="subtitle is-4 has-text-grey-light mt-3">Misiones que expanden nuestro conocimiento del universo</h2>
            </div>
        </div>
    </section>

    <section class="section has-background-dark">
        <div class="container">
            <!-- Misión 1 -->
            <div class="box has-background-grey-darker mb-6 transform hover:scale-101 transition duration-300" style="border-left: 4px solid #ffdd57;">
                <div class="columns is-vcentered">
                    <div class="column is-4">
                        <figure class="image is-4by3 rounded-lg overflow-hidden shadow-md">
                            <img class="object-cover" src="assets\img\exploracion-espacial\apolo11.jpg" alt="Apollo 11">
                        </figure>
                    </div>
                    <div class="column">
                        <div class="mb-4">
                            <h3 class="title is-3 has-text-warning">Apollo 11</h3>
                            <p class="subtitle is-5 has-text-grey-light">1969 - Primera misión tripulada a la Luna</p>
                        </div>
                        <div class="content has-text-white">
                            <p class="mb-4">Neil Armstrong y Buzz Aldrin se convirtieron en los primeros humanos en caminar sobre la superficie lunar el 20 de julio de 1969.</p>
                            <div class="tags are-medium">
                                <span class="tag is-warning is-light">
                                    <span class="icon"><i class="fas fa-user-astronaut"></i></span>
                                    <span>Tripulación: Armstrong, Aldrin, Collins</span>
                                </span>
                                <span class="tag is-dark">
                                    <span class="icon"><i class="fas fa-rocket"></i></span>
                                    <span>Saturno V</span>
                                </span>
                                <span class="tag is-dark">
                                    <span class="icon"><i class="fas fa-flag-usa"></i></span>
                                    <span>NASA</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misión 2 -->
            <div class="box has-background-grey-darker mb-6 transform hover:scale-101 transition duration-300" style="border-left: 4px solid #3298dc;">
                <div class="columns is-vcentered">
                    <div class="column is-4">
                        <figure class="image is-4by3 rounded-lg overflow-hidden shadow-md">
                            <img class="object-cover" src="assets\img\exploracion-espacial\Voyager.jpg" alt="Voyager">
                        </figure>
                    </div>
                    <div class="column">
                        <div class="mb-4">
                            <h3 class="title is-3 has-text-info">Voyager 1 y 2</h3>
                            <p class="subtitle is-5 has-text-grey-light">1977 - Sondas interestelares</p>
                        </div>
                        <div class="content has-text-white">
                            <p class="mb-4">Las sondas Voyager han salido del Sistema Solar y llevan consigo el "Disco de Oro" con sonidos e imágenes de la Tierra.</p>
                            <div class="tags are-medium">
                                <span class="tag is-info is-light">
                                    <span class="icon"><i class="fas fa-road"></i></span>
                                    <span>Distancia: 22 mil millones de km</span>
                                </span>
                                <span class="tag is-dark">
                                    <span class="icon"><i class="fas fa-compact-disc"></i></span>
                                    <span>Disco de Oro</span>
                                </span>
                                <span class="tag is-dark">
                                    <span class="icon"><i class="fas fa-flag-usa"></i></span>
                                    <span>NASA</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
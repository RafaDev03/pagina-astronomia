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
                <h1 class="title is-1 has-text-white mb-2">Eventos Astronómicos</h1>
                <div class="divider is-warning mx-auto" style="width: 100px; height: 3px; background: linear-gradient(90deg, transparent, #ffdd57, transparent);"></div>
                <h2 class="subtitle is-4 has-text-grey-light mt-3">Próximos eventos celestes que no te puedes perder</h2>
            </div>
        </div>
    </section>

    <section class="section has-background-dark">
        <div class="container">
            <!-- Evento 1 -->
            <div class="box has-background-grey-darker mb-6 transform hover:scale-102 transition duration-300 shadow-lg hover:shadow-xl" style="border-left: 4px solid #ffdd57;">
                <div class="columns is-vcentered">
                    <div class="column is-one-third">
                        <figure class="image is-4by3 rounded-lg overflow-hidden shadow-md">
                            <img src="assets\img\eventos\lluvia-liridas.jpg" alt="Lluvia de meteoros" class="object-cover h-full w-full">
                        </figure>
                    </div>
                    <div class="column">
                        <div class="flex items-center mb-2">
                            <h3 class="title is-3 has-text-warning mr-3">Lluvia de Líridas</h3>
                            <span class="tag is-warning is-medium">Hemisferio Norte</span>
                        </div>
                        <p class="subtitle is-5 has-text-grey-light mb-4">
                            <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                            15 de Abril, 2023
                        </p>
                        <div class="content has-text-white">
                            <p class="mb-4">Hasta 20 meteoros por hora podrán verse en el Hemisferio Norte. Mejor visibilidad después de la medianoche.</p>
                            <div class="buttons">
                                <button class="button is-warning is-outlined is-rounded">
                                    <span class="icon"><i class="fas fa-bell"></i></span>
                                    <span>Recordarme</span>
                                </button>
                                <button class="button is-dark is-outlined is-rounded">
                                    <span class="icon"><i class="fas fa-info-circle"></i></span>
                                    <span>Más detalles</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 2 -->
            <div class="box has-background-grey-darker mb-6 transform hover:scale-102 transition duration-300 shadow-lg hover:shadow-xl" style="border-left: 4px solid #3298dc;">
                <div class="columns is-vcentered">
                    <div class="column is-one-third">
                        <figure class="image is-4by3 rounded-lg overflow-hidden shadow-md">
                            <img src="assets\img\eventos\luna-flores.jpg" alt="Superluna" class="object-cover h-full w-full">
                        </figure>
                    </div>
                    <div class="column">
                        <div class="flex items-center mb-2">
                            <h3 class="title is-3 has-text-info mr-3">Luna de las Flores</h3>
                            <span class="tag is-info is-medium">Visible globalmente</span>
                        </div>
                        <p class="subtitle is-5 has-text-grey-light mb-4">
                            <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                            8 de Mayo, 2023
                        </p>
                        <div class="content has-text-white">
                            <p class="mb-4">La superluna más grande del año, visible en todo el mundo. Perfecta para observación con prismáticos.</p>
                            <div class="buttons">
                                <button class="button is-info is-outlined is-rounded">
                                    <span class="icon"><i class="fas fa-bell"></i></span>
                                    <span>Recordarme</span>
                                </button>
                                <button class="button is-dark is-outlined is-rounded">
                                    <span class="icon"><i class="fas fa-info-circle"></i></span>
                                    <span>Más detalles</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Espacio para más eventos -->
            <div class="has-text-centered mt-6">
                <button class="button is-large is-outlined is-white is-rounded">
                    <span class="icon"><i class="fas fa-plus"></i></span>
                    <span>Cargar más eventos</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Sección de newsletter -->
    <section class="section has-background-black">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-8">
                    <div class="box has-background-grey-darker p-6">
                        <h3 class="title is-3 has-text-centered has-text-white mb-4">Suscríbete a nuestro boletín astronómico</h3>
                        <p class="subtitle is-5 has-text-centered has-text-grey-light mb-5">Recibe alertas sobre eventos celestes y consejos para observación</p>
                        <div class="field has-addons is-fullwidth">
                            <div class="control is-expanded">
                                <input class="input is-large" type="email" placeholder="Tu correo electrónico">
                            </div>
                            <div class="control">
                                <button class="button is-warning is-large">
                                    Suscribirse
                                </button>
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
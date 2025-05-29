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
                <div class="mb-5">
                    <figure class="image is-128x128 is-inline-block transform hover:rotate-12 transition duration-500">
                        <img class="is-rounded shadow-lg" 
                            src="https://images.unsplash.com/photo-1465101162946-4377e57745c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Galaxia">
                    </figure>
                </div>
                <h1 class="title is-1 has-text-white mt-4 mb-2">Curiosidades Cósmicas</h1>
                <div class="divider is-warning mx-auto" style="width: 80px; height: 2px; background: linear-gradient(90deg, transparent, #ffdd57, transparent);"></div>
                <h2 class="subtitle is-4 has-text-grey-light mt-3">Datos fascinantes que te sorprenderán</h2>
            </div>
        </div>
    </section>

    <section class="section has-background-dark">
        <div class="container">
            <div class="columns is-multiline is-centered">
                <!-- Curiosidad 1 -->
                <div class="column is-6">
                    <div class="box has-background-grey-darker hover:shadow-lg transition duration-300" style="border-top: 3px solid #ffdd57;">
                        <div class="columns is-vcentered">
                            <div class="column is-one-third">
                                <figure class="image is-1by1 rounded-full overflow-hidden shadow-md">
                                    <img class="object-cover" 
                                        src="https://images.unsplash.com/photo-1614728894747-a83421e2b9c9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                        alt="Venus">
                                </figure>
                            </div>
                            <div class="column">
                                <h3 class="title is-4 has-text-warning mb-3">Día más largo que un año</h3>
                                <div class="content has-text-white">
                                    <p class="mb-4">En Venus, un día (243 días terrestres) dura más que un año (225 días terrestres).</p>
                                    <span class="tag is-warning is-light">Planetología</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Curiosidad 2 -->
                <div class="column is-6">
                    <div class="box has-background-grey-darker hover:shadow-lg transition duration-300" style="border-top: 3px solid #ffdd57;">
                        <div class="columns is-vcentered">
                            <div class="column is-one-third">
                                <figure class="image is-1by1 rounded-full overflow-hidden shadow-md">
                                    <img class="object-cover"
                                        src="assets\img\curiosidades\sol.jpg"
                                        alt="Sol">
                                </figure>
                            </div>
                            <div class="column">
                                <h3 class="title is-4 has-text-warning mb-3">Masa del Sol</h3>
                                <div class="content has-text-white">
                                    <p class="mb-4">El Sol contiene el 99.86% de toda la masa del Sistema Solar.</p>
                                    <span class="tag is-warning is-light">Astrofísica</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Espacio para más curiosidades -->
                <div class="column is-12 has-text-centered mt-5">
                    <button class="button is-medium is-warning is-outlined is-rounded">
                        <span class="icon">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span>Mostrar más curiosidades</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

   

    <?php include 'includes/footer.php'; ?>
</body>
</html>
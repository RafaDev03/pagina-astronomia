<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiosidades | Astronomía</title>
    <link rel="stylesheet" href="../node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link rel="stylesheet" href="assets/css/tailwind.css">
</head>
<body class="has-background-dark">
    <?php include 'includes/header.php'; ?>
    <section class="hero is-black">
        <div class="hero-body">
            <div class="container has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="https://images.unsplash.com/photo-1465101162946-4377e57745c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Galaxia">
                </figure>
                <h1 class="title is-1 has-text-white mt-4">Curiosidades</h1>
                <h2 class="subtitle is-4 has-text-grey-light">Datos fascinantes del cosmos</h2>
            </div>
        </div>
    </section>

    <section class="section has-background-dark">
        <div class="container">
            <div class="columns is-multiline">
                <!-- Curiosidad 1 -->
                <div class="column is-6">
                    <div class="box has-background-grey-darker">
                        <div class="columns is-vcentered">
                            <div class="column is-one-third">
                                <figure class="image is-1by1">
                                    <img src="https://images.unsplash.com/photo-1614728894747-a83421e2b9c9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Venus">
                                </figure>
                            </div>
                            <div class="column">
                                <h3 class="title is-4 has-text-warning">Día más largo que un año</h3>
                                <div class="content has-text-white">
                                    <p>En Venus, un día (243 días terrestres) dura más que un año (225 días terrestres).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Curiosidad 2 -->
                <div class="column is-6">
                    <div class="box has-background-grey-darker">
                        <div class="columns is-vcentered">
                            <div class="column is-one-third">
                                <figure class="image is-1by1">
                                    <img src="https://images.unsplash.com/photo-1614642264762-d0a3b8bf3700?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Sol">
                                </figure>
                            </div>
                            <div class="column">
                                <h3 class="title is-4 has-text-warning">Masa del Sol</h3>
                                <div class="content has-text-white">
                                    <p>El Sol contiene el 99.86% de toda la masa del Sistema Solar.</p>
                                </div>
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
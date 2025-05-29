<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Galaxias</title>

    <!-- Bulma CSS -->
    <link rel="stylesheet" href="../node_modules/bulma/css/bulma.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="assets/css/tailwind.css">
</head>

<body class="has-background-dark">
    <?php include 'includes/header.php'; ?>

    <!-- Hero principal -->
    <section class="hero is-black">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-1 has-text-white mt-4">Tipos de Galaxias</h1>
                <h2 class="subtitle is-4 has-text-grey-light">Clasificación según su forma y estructura</h2>
            </div>
        </div>
    </section>

    <!-- Cómo se forman las galaxias -->
    <section class="section has-background-black">
        <div class="container has-text-centered">
            <h3 class="title is-4 has-text-warning mb-5">¿Cómo se forman las galaxias?</h3>
            <div class="columns is-multiline is-centered is-variable is-6">

                <div class="column is-4">
                    <div
                        class="box has-background-grey-darker has-text-white p-5 hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-transform">
                        <i class="fas fa-cloud-moon fa-2x mb-3 has-text-warning"></i>
                        <h4 class="title is-5">Nubes de gas y polvo</h4>
                        <p>Las galaxias comienzan a formarse a partir de gigantescas nubes de gas y polvo en el universo
                            temprano.</p>
                    </div>
                </div>

                <div class="column is-4">
                    <div
                        class="box has-background-grey-darker has-text-white p-5 hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-transform">
                        <i class="fas fa-meteor fa-2x mb-3 has-text-warning"></i>
                        <h4 class="title is-5">Colapso gravitacional</h4>
                        <p>La gravedad hace que estas nubes colapsen y comiencen a formar estrellas y estructuras.</p>
                    </div>
                </div>

                <div class="column is-4">
                    <div
                        class="box has-background-grey-darker has-text-white p-5 hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-transform">
                        <i class="fas fa-star fa-2x mb-3 has-text-warning"></i>
                        <h4 class="title is-5">Fusiones y agrupamientos</h4>
                        <p>Las galaxias pueden crecer y cambiar con fusiones y colisiones con otras galaxias cercanas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sección de Galaxias -->
    <section class="section has-background-dark">
        <div class="container">
            <div class="columns is-multiline">

                <!-- Galaxia Elíptica -->
                <div class="column is-3">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/galaxias/eliptica.jpg" alt="Galaxia Elíptica"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Elíptica</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">Forma ovalada, estrellas viejas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galaxia Espiral -->
                <div class="column is-3">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/galaxias/espiral.jpg" alt="Galaxia Espiral"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Espiral</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">Brazos girando alrededor de un núcleo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galaxia Lenticular -->
                <div class="column is-3">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/galaxias/lenticular.jpg" alt="Galaxia Lenticular"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Lenticular</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">Disco sin brazos definidos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galaxia Irregular -->
                <div class="column is-3 ">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/galaxias/irregular.jpg" alt="Galaxia Irregular"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Irregular</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">Sin estructura fija, muchas por colisiones.</p>
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
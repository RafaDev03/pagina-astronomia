<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <title>Galaxias</title>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered mb-6">Tipos de Galaxias</h1>
            <div class="columns is-multiline">

                <!-- Galaxia Elíptica -->
                <div class="column is-one-quarter">
                    <div class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-shadow-lg tw-cursor-pointer">
                        <img src="assets/img/galaxias/eliptica.jpg" alt="Galaxia Elíptica"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold">Galaxia Elíptica</h2>
                                <p class="tw-text-sm">Tienen forma ovalada y contienen estrellas viejas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galaxia Espiral -->
                <div class="column is-one-quarter">
                    <div class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-shadow-lg tw-cursor-pointer">
                        <img src="assets/img/galaxias/espiral.jpg" alt="Galaxia Espiral"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold">Galaxia Espiral</h2>
                                <p class="tw-text-sm">Poseen brazos que giran alrededor de un núcleo central brillante.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galaxia Lenticular -->
                <div class="column is-one-quarter">
                    <div class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-shadow-lg tw-cursor-pointer">
                        <img src="assets/img/galaxias/lenticular.jpg" alt="Galaxia Lenticular"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold">Galaxia Lenticular</h2>
                                <p class="tw-text-sm">Una forma intermedia entre elíptica y espiral, con disco pero sin
                                    brazos definidos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galaxia Irregular -->
                <div class="column is-one-quarter">
                    <div class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-shadow-lg tw-cursor-pointer">
                        <img src="assets/img/galaxias/irregular.jpg" alt="Galaxia Irregular"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold">Galaxia Irregular</h2>
                                <p class="tw-text-sm">Carecen de una estructura definida, muchas veces por colisiones o
                                    gravedad.</p>
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
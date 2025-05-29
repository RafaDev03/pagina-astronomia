<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agujeros Negros - Astronomía</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="../node_modules/bulma/css/bulma.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="assets/css/tailwind.css">
</head>

<body class="has-background-dark has-text-light">

    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero -->
    <section class="hero is-black py-6">
        <div class="hero-body has-text-centered">
            <h1 class="title is-1 has-text-white mt-4 mb-3">Agujeros Negros</h1>
            <p class="subtitle has-text-grey-light is-size-5">
                Los misteriosos objetos con gravedad tan intensa que nada escapa de ellos.
            </p>
        </div>
    </section>

    <!-- ¿Qué es un agujero negro? -->
    <section class="section">
        <div class="container has-text-centered">
            <h3 class="title is-4 has-text-warning mb-5">
                ¿Qué es un agujero negro?
            </h3>

            <div class="box has-background-grey-darker has-text-white p-5 tw-max-w-3xl tw-mx-auto">
                <p class="tw-text-lg tw-leading-relaxed">
                    Un agujero negro es una región en el espacio donde la gravedad es tan fuerte que nada, ni siquiera
                    la luz, puede escapar de ella. Se forma cuando una estrella muy masiva colapsa al final de su vida.
                </p>
            </div>
        </div>
    </section>


    <!-- Formación de agujeros negros -->
    <section class="section">
        <div class="container has-text-centered">
            <h3 class="title is-4 has-text-warning mb-5">Formación de agujeros negros</h3>

            <div class="columns is-centered is-multiline is-variable is-6">

                <div class="column is-4">
                    <div
                        class="box has-background-grey-darker has-text-white p-5 hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-transform">
                        <i class="fas fa-star fa-2x mb-3 has-text-warning"></i>
                        <h4 class="title is-5">Colapso de estrellas masivas</h4>
                        <p>Después de agotar su combustible, estas estrellas colapsan bajo su propia gravedad.</p>
                    </div>
                </div>

                <div class="column is-4">
                    <div
                        class="box has-background-grey-darker has-text-white p-5 hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-transform">
                        <i class="fas fa-handshake fa-2x mb-3 has-text-warning"></i>
                        <h4 class="title is-5">Fusiones de estrellas de neutrones o agujeros negros</h4>
                        <p>La unión de estos objetos compactos puede formar agujeros negros más grandes.</p>
                    </div>
                </div>

                <div class="column is-4">
                    <div
                        class="box has-background-grey-darker has-text-white p-5 hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-transform">
                        <i class="fas fa-galaxy fa-2x mb-3 has-text-warning"></i>
                        <h4 class="title is-5">Crecimiento de agujeros negros supermasivos</h4>
                        <p>Mediante acumulación de masa y fusiones galácticas, pueden alcanzar masas enormes.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Tipos de agujeros negros -->
    <section class="section has-background-dark">
        <div class="container">
            <h3 class="title is-4 has-text-centered has-text-warning mb-5">Tipos de agujeros negros</h3>
            <div class="columns is-multiline">

                <!-- Agujero negro estelar -->
                <div class="column is-3">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/agujeros-negros/estelar.jpg" alt="Agujero negro estelar"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Estelar</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">Formado tras el colapso gravitacional de
                                    estrellas masivas al final de su vida. Su masa suele ser entre 5 y 30 veces la del
                                    Sol, y puede detectarse por la radiación emitida al absorber materia cercana.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agujero negro supermasivo -->
                <div class="column is-3">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/agujeros-negros/supermasivo.jpg" alt="Agujero negro supermasivo"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Supermasivo</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">Situados en el centro de casi todas las
                                    galaxias, tienen masas que van desde millones hasta miles de millones de veces la
                                    del Sol. Su formación aún es un misterio y están asociados a potentes efectos
                                    gravitacionales y emisión energética.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agujero negro de masa intermedia -->
                <div class="column is-3">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/agujeros-negros/masa-intermedia.jpeg"
                            alt="Agujero negro de masa intermedia"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Masa intermedia</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">Agujeros negros con masas entre cientos y
                                    decenas de miles de masas solares. Se cree que podrían formarse por la fusión de
                                    agujeros negros estelares o colapsos en cúmulos estelares densos, pero su existencia
                                    aún es objeto de estudio.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agujero negro primordial -->
                <div class="column is-3">
                    <div
                        class="tw-relative tw-group tw-overflow-hidden tw-rounded-lg tw-cursor-pointer tw-transition-transform tw-duration-300 tw-transform hover:tw-scale-105 hover:tw-saturate-150 hover:tw-brightness-110 glow-hover tw-bg-gradient-to-br from-purple-900 via-indigo-900 to-black tw-shadow-lg hover:tw-shadow-[0_0_20px_5px_rgba(130,90,230,0.7)]">
                        <img src="assets/img/agujeros-negros/primordial.jpg" alt="Agujero negro primordial"
                            class="tw-w-full tw-h-60 tw-object-cover tw-transition-all tw-duration-500 group-hover:tw-opacity-40" />
                        <div
                            class="tw-absolute tw-inset-0 tw-flex tw-items-center tw-justify-center tw-bg-black/70 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-500 tw-text-white tw-text-center tw-p-4 tw-backdrop-blur-sm">
                            <div>
                                <h2 class="tw-text-lg tw-font-bold tw-drop-shadow-lg">Primordial</h2>
                                <p class="tw-text-sm tw-drop-shadow-md">ipotéticos agujeros negros formados en los
                                    primeros instantes tras el Big Bang, debido a fluctuaciones de densidad extremas.
                                    Podrían tener masas muy variadas y serían clave para entender la materia oscura y la
                                    evolución temprana del universo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

</body>

</html>
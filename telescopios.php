<!DOCTYPE html>
<html lang="en">

<?php include_once 'includes/head.php'; ?>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero -->
    <section class="hero is-black py-6">
        <div class="hero-body">
            <div class="hero-body has-text-centered">
                <h1 class="title is-1 has-text-white mt-4 mb-4">Telescopios</h1>
                <p class="subtitle has-text-grey-light is-size-5">Instrumentos que nos permiten explorar el cosmos desde
                    la Tierra.</p>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="section has-background-dark">
        <div class="container has-text-centered mt-2 tw-px-4">
            <h2 class="title is-4 has-text-warning mb-6">
                Los Telescopios Más Potentes del Mundo
            </h2>

            <div
                class="tw-flex tw-flex-col md:tw-flex-row tw-gap-10 tw-gap-y-10 md:tw-gap-y-0 tw-items-stretch tw-justify-center">

                <!-- Card 1 -->
                <div
                    class="tw-bg-gray-800 tw-rounded-2xl tw-shadow-lg tw-overflow-hidden tw-w-full md:tw-w-1/3 tw-flex tw-flex-col tw-transition-transform hover:tw-scale-105">
                    <figure class="tw-p-4">
                        <img src="assets/img/telescopios/canarias.jpg" alt="Gran Telescopio de Canarias"
                            class="tw-rounded-xl tw-h-48 tw-w-full tw-object-cover tw-object-center" />
                    </figure>
                    <div class="tw-px-6 tw-pb-6 tw-flex tw-flex-col tw-flex-grow">
                        <h3 class="tw-text-2xl tw-font-bold tw-text-yellow-300 tw-mb-2">Gran Telescopio de Canarias</h3>
                        <p class="tw-text-sm tw-text-gray-300 tw-flex-grow">
                            Localizado en La Palma, el GRANTECAN es el telescopio óptico más grande del mundo, con un
                            espejo de 10,4 m. Opera en rangos óptico e infrarrojo.
                        </p>
                        <p class="tw-text-xs tw-text-gray-400 tw-mt-3">Foto: Dusko Despotovic/Corbis via Getty Images
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="tw-bg-gray-800 tw-rounded-2xl tw-shadow-lg tw-overflow-hidden tw-w-full md:tw-w-1/3 tw-flex tw-flex-col tw-transition-transform hover:tw-scale-105">
                    <figure class="tw-p-4">
                        <img src="assets/img/telescopios/alma.jpg" alt="ALMA"
                            class="tw-rounded-xl tw-h-48 tw-w-full tw-object-cover tw-object-center" />
                    </figure>
                    <div class="tw-px-6 tw-pb-6 tw-flex tw-flex-col tw-flex-grow">
                        <h3 class="tw-text-2xl tw-font-bold tw-text-yellow-300 tw-mb-2">ALMA: Atacama Large Millimeter
                            Array</h3>
                        <p class="tw-text-sm tw-text-gray-300 tw-flex-grow">
                            En Chile, ALMA usa 66 antenas para observar en radiofrecuencia. Fue parte de la primera
                            imagen de un agujero negro.
                        </p>
                        <p class="tw-text-xs tw-text-gray-400 tw-mt-3">Imagen: ESO/NAOJ/NRAO</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="tw-bg-gray-800 tw-rounded-2xl tw-shadow-lg tw-overflow-hidden tw-w-full md:tw-w-1/3 tw-flex tw-flex-col tw-transition-transform hover:tw-scale-105">
                    <figure class="tw-p-4">
                        <img src="assets/img/telescopios/james-webb.jpg" alt="James Webb"
                            class="tw-rounded-xl tw-h-48 tw-w-full tw-object-cover tw-object-center" />
                    </figure>
                    <div class="tw-px-6 tw-pb-6 tw-flex tw-flex-col tw-flex-grow">
                        <h3 class="tw-text-2xl tw-font-bold tw-text-yellow-300 tw-mb-2">Telescopio Espacial James Webb
                        </h3>
                        <p class="tw-text-sm tw-text-gray-300 tw-flex-grow">
                            Operado por la NASA/ESA/CSA, detectó la galaxia más antigua conocida y restos de supernovas
                            desde 2021.
                        </p>
                        <p class="tw-text-xs tw-text-gray-400 tw-mt-3">Foto: NASA/ESA/CSA</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <!-- Tailwind CSS con prefijo (compilado tú mismo) -->
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <title>Galaxias</title>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered mb-6">Tipos de Galaxias</h1>
            <div class="columns is-multiline">
                <!-- Galaxia 1 -->
                <div class="column is-one-quarter">
                    <div
                        class="group relative overflow-hidden rounded-lg shadow-lg transition-transform duration-500 hover:scale-105">
                        <img src="assets/img/galaxias/andromeda.jpg" alt="Galaxia Andrómeda"
                            class="w-full h-60 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <p class="text-white text-center p-4">Galaxia Andrómeda: nuestra vecina más cercana, ejemplo
                                de galaxia espiral.</p>
                        </div>
                    </div>
                </div>

                <!-- Galaxia 2 -->
                <div class="column is-one-quarter">
                    <div
                        class="group relative overflow-hidden rounded-lg shadow-lg transition-transform duration-500 hover:scale-105">
                        <img src="assets/img/galaxias/eliptica.jpg" alt="Galaxia Elíptica"
                            class="w-full h-60 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <p class="text-white text-center p-4">Las galaxias elípticas tienen forma ovalada y
                                contienen estrellas viejas.</p>
                        </div>
                    </div>
                </div>

                <!-- Galaxia 3 -->
                <div class="column is-one-quarter">
                    <div
                        class="group relative overflow-hidden rounded-lg shadow-lg transition-transform duration-500 hover:scale-105">
                        <img src="assets/img/galaxias/irregular.jpg" alt="Galaxia Irregular"
                            class="w-full h-60 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <p class="text-white text-center p-4">Galaxias sin forma definida, usualmente resultado de
                                colisiones.</p>
                        </div>
                    </div>
                </div>

                <!-- Galaxia 4 -->
                <div class="column is-one-quarter">
                    <div
                        class="group relative overflow-hidden rounded-lg shadow-lg transition-transform duration-500 hover:scale-105">
                        <img src="assets/img/galaxias/espiral.jpg" alt="Galaxia Espiral"
                            class="w-full h-60 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <p class="text-white text-center p-4">Las galaxias espirales tienen brazos que giran
                                alrededor del núcleo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>
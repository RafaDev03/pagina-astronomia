<!DOCTYPE html>
<html lang="es">
<?php include_once 'includes/head.php' ?>
<body class="bg-gray-900">
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero is-black is-bold">
        <div class="hero-body" style="background-image: radial-gradient(circle at center, #1a202c 0%, #111827 100%);">
            <div class="container has-text-centered">
                <h1 class="title is-1 has-text-yellow-300 mb-4 tracking-wider">Eventos Astronómicos</h1>
                <div class="divider mx-auto" style="width: 150px; height: 3px; background: linear-gradient(90deg, transparent, #ffdd57, transparent);"></div>
                <h2 class="subtitle is-4 has-text-grey-lighter mt-4">Próximos eventos celestes que no te puedes perder</h2>
                
                <!-- Static Countdown -->
                <div class="mt-6 is-flex is-justify-content-center">
                    <div class="tags has-addons">
                        <span class="tag is-warning is-medium">
                            <i class="fas fa-clock mr-2"></i>Próximo evento en:
                        </span>
                        <span class="tag is-dark is-medium">15 días</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section py-6" style="background-color: #111827;">
        <div class="container">
            <!-- Filter Section -->
            <div class="box has-background-grey-darker mb-6">
                <div class="field is-grouped is-grouped-multiline">
                    <div class="control">
                        <div class="select is-dark">
                            <select>
                                <option>Todos los meses</option>
                                <option>Enero</option>
                                <option>Febrero</option>
                                <option>Marzo</option>
                            </select>
                        </div>
                    </div>
                    <div class="control">
                        <div class="select is-dark">
                            <select>
                                <option>Todos los tipos</option>
                                <option>Lluvias de meteoros</option>
                                <option>Eclipses</option>
                                <option>Superlunas</option>
                            </select>
                        </div>
                    </div>
                    <div class="control">
                        <div class="select is-dark">
                            <select>
                                <option>Todas las regiones</option>
                                <option>Hemisferio Norte</option>
                                <option>Hemisferio Sur</option>
                                <option>Global</option>
                            </select>
                        </div>
                    </div>
                    <div class="control">
                        <button class="button is-warning is-outlined">
                            <span class="icon"><i class="fas fa-filter"></i></span>
                            <span>Filtrar</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Event Cards -->
            <!-- Evento 1 - Enhanced -->
            <div class="box has-background-grey-darker mb-6 transition-all duration-300 hover:shadow-2xl hover:border-l-4 hover:border-yellow-400" 
                 style="border-left: 4px solid #ffdd57;">
                <div class="columns is-vcentered">
                    <div class="column is-one-third">
                        <figure class="image is-4by3 rounded-lg overflow-hidden shadow-lg relative">
                            <img src="assets/img/eventos/lluvia-liridas.jpg" alt="Lluvia de meteoros" 
                                 class="object-cover h-full w-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                                <span class="tag is-warning is-medium">Destacado</span>
                            </div>
                        </figure>
                    </div>
                    <div class="column">
                        <div class="flex items-center mb-3">
                            <h3 class="title is-3 has-text-warning mr-4">Lluvia de Líridas</h3>
                            <span class="tag is-warning is-medium">
                                <i class="fas fa-globe-europe mr-2"></i>Hemisferio Norte
                            </span>
                        </div>
                        <div class="is-flex is-align-items-center mb-4">
                            <span class="icon-text has-text-grey-light mr-5">
                                <span class="icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                                <span>15 de Abril, 2023</span>
                            </span>
                            <span class="icon-text has-text-grey-light">
                                <span class="icon">
                                    <i class="fas fa-clock"></i>
                                </span>
                                <span>22:00 - 04:00 UTC</span>
                            </span>
                        </div>
                        <div class="content has-text-white">
                            <p class="mb-4">La lluvia de meteoros de las Líridas es una de las más antiguas conocidas, con registros que se remontan a 2.700 años. Este año se esperan hasta 20 meteoros por hora en condiciones óptimas, con pico de actividad alrededor de las 02:00 UTC.</p>
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <div class="tags">
                                            <span class="tag is-dark"><i class="fas fa-eye mr-2"></i>Visible a simple vista</span>
                                            <span class="tag is-dark"><i class="fas fa-moon mr-2"></i>Luna en cuarto creciente</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="buttons">
                                        <button class="button is-warning is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-bell"></i></span>
                                            <span>Recordarme</span>
                                        </button>
                                        <button class="button is-dark is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-info-circle"></i></span>
                                            <span>Más detalles</span>
                                        </button>
                                        <button class="button is-dark is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-share-alt"></i></span>
                                            <span>Compartir</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 2 - Enhanced -->
            <div class="box has-background-grey-darker mb-6 transition-all duration-300 hover:shadow-2xl hover:border-l-4 hover:border-blue-400" 
                 style="border-left: 4px solid #3298dc;">
                <div class="columns is-vcentered">
                    <div class="column is-one-third">
                        <figure class="image is-4by3 rounded-lg overflow-hidden shadow-lg relative">
                            <img src="assets/img/eventos/luna-flores.jpg" alt="Superluna" 
                                 class="object-cover h-full w-full">
                            <div class="absolute top-0 left-0 right-0 p-4">
                                <span class="tag is-info is-medium">Evento Global</span>
                            </div>
                        </figure>
                    </div>
                    <div class="column">
                        <div class="flex items-center mb-3">
                            <h3 class="title is-3 has-text-info mr-4">Luna de las Flores</h3>
                            <span class="tag is-info is-medium">
                                <i class="fas fa-globe mr-2"></i>Visible globalmente
                            </span>
                        </div>
                        <div class="is-flex is-align-items-center mb-4">
                            <span class="icon-text has-text-grey-light mr-5">
                                <span class="icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                                <span>8 de Mayo, 2023</span>
                            </span>
                            <span class="icon-text has-text-grey-light">
                                <span class="icon">
                                    <i class="fas fa-clock"></i>
                                </span>
                                <span>Visible toda la noche</span>
                            </span>
                        </div>
                        <div class="content has-text-white">
                            <p class="mb-4">La Luna de las Flores será la superluna más grande y brillante del año, apareciendo un 14% más grande y un 30% más brillante que una luna llena normal. Esta luna llena marca el pico de la primavera en el hemisferio norte, cuando las flores abundan.</p>
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <div class="tags">
                                            <span class="tag is-dark"><i class="fas fa-binoculars mr-2"></i>Mejor con prismáticos</span>
                                            <span class="tag is-dark"><i class="fas fa-cloud-sun mr-2"></i>Condiciones óptimas</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="buttons">
                                        <button class="button is-info is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-bell"></i></span>
                                            <span>Recordarme</span>
                                        </button>
                                        <button class="button is-dark is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-info-circle"></i></span>
                                            <span>Más detalles</span>
                                        </button>
                                        <button class="button is-dark is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-share-alt"></i></span>
                                            <span>Compartir</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 3 - New -->
            <div class="box has-background-grey-darker mb-6 transition-all duration-300 hover:shadow-2xl hover:border-l-4 hover:border-purple-400" 
                 style="border-left: 4px solid #9b59b6;">
                <div class="columns is-vcentered">
                    <div class="column is-one-third">
                        <figure class="image is-4by3 rounded-lg overflow-hidden shadow-lg relative">
                            <img src="assets\img\eventos\eclipse.jpg" alt="Eclipse Solar" 
                                 class="object-cover h-full w-full">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                                <span class="tag is-danger is-medium">Evento Raro</span>
                            </div>
                        </figure>
                    </div>
                    <div class="column">
                        <div class="flex items-center mb-3">
                            <h3 class="title is-3 has-text-danger mr-4">Eclipse Solar Híbrido</h3>
                            <span class="tag is-danger is-medium">
                                <i class="fas fa-map-marker-alt mr-2"></i>África, Asia, Australia
                            </span>
                        </div>
                        <div class="is-flex is-align-items-center mb-4">
                            <span class="icon-text has-text-grey-light mr-5">
                                <span class="icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                                <span>20 de Abril, 2023</span>
                            </span>
                            <span class="icon-text has-text-grey-light">
                                <span class="icon">
                                    <i class="fas fa-clock"></i>
                                </span>
                                <span>04:17 - 09:46 UTC</span>
                            </span>
                        </div>
                        <div class="content has-text-white">
                            <p class="mb-4">Un raro eclipse solar híbrido que cambiará de anular a total y viceversa a lo largo de su trayectoria. Visible como eclipse parcial en una amplia región que incluye el sudeste asiático, este de la India, Australia, Filipinas y Nueva Zelanda.</p>
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <div class="tags">
                                            <span class="tag is-dark"><i class="fas fa-glasses mr-2"></i>Protección ocular necesaria</span>
                                            <span class="tag is-dark"><i class="fas fa-stopwatch mr-2"></i>Duración: 5h 29m</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="buttons">
                                        <button class="button is-danger is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-bell"></i></span>
                                            <span>Recordarme</span>
                                        </button>
                                        <button class="button is-dark is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-info-circle"></i></span>
                                            <span>Más detalles</span>
                                        </button>
                                        <button class="button is-dark is-outlined is-rounded">
                                            <span class="icon"><i class="fas fa-share-alt"></i></span>
                                            <span>Compartir</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="has-text-centered mt-6">
                <button class="button is-large is-outlined is-white is-rounded px-6">
                    <span class="icon"><i class="fas fa-arrow-down"></i></span>
                    <span>Cargar más eventos</span>
                </button>
            </div>
        </div>
    </section>

    
    <!-- Tips Section -->
    <section class="section py-6" style="background-color: #111827;">
        <div class="container">
            <h2 class="title is-2 has-text-centered has-text-white mb-6">Consejos para la Observación</h2>
            
            <div class="columns is-multiline">
                <div class="column is-4">
                    <div class="box has-background-grey-darker h-full">
                        <div class="icon-text mb-4">
                            <span class="icon is-large has-text-warning">
                                <i class="fas fa-binoculars fa-2x"></i>
                            </span>
                            <span class="title is-4 has-text-white ml-3">Equipo Básico</span>
                        </div>
                        <p class="has-text-grey-lighter">Para disfrutar de los eventos astronómicos, solo necesitas tus ojos. Sin embargo, unos prismáticos (7x50 o 10x50) mejorarán enormemente tu experiencia, especialmente para lluvias de meteoros y observación lunar.</p>
                    </div>
                </div>
                
                <div class="column is-4">
                    <div class="box has-background-grey-darker h-full">
                        <div class="icon-text mb-4">
                            <span class="icon is-large has-text-info">
                                <i class="fas fa-moon fa-2x"></i>
                            </span>
                            <span class="title is-4 has-text-white ml-3">Condiciones de Visibilidad</span>
                        </div>
                        <p class="has-text-grey-lighter">Busca lugares con poca contaminación lumínica. La fase lunar afecta la visibilidad - la luna nueva es ideal para observar objetos débiles. Usa apps como Light Pollution Map para encontrar buenos lugares.</p>
                    </div>
                </div>
                
                <div class="column is-4">
                    <div class="box has-background-grey-darker h-full">
                        <div class="icon-text mb-4">
                            <span class="icon is-large has-text-danger">
                                <i class="fas fa-sun fa-2x"></i>
                            </span>
                            <span class="title is-4 has-text-white ml-3">Seguridad en Eclipses</span>
                        </div>
                        <p class="has-text-grey-lighter">Nunca mires directamente al sol sin protección adecuada. Para eclipses solares usa gafas certificadas ISO 12312-2. Los filtros caseros o gafas de sol normales no son seguros.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
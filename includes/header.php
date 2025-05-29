<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="tw-bg-gray-900 has-text-white py-4">
    <div class="container has-text-centered">
        <nav class="tw-flex tw-flex-col md:tw-flex-row tw-items-center tw-justify-center tw-gap-2">
            <ul class="tw-flex tw-flex-col md:tw-flex-row tw-items-center tw-gap-2">

                <?php
                $pages = [
                    "index.php" => ["Inicio", "fas fa-house"],
                    "historia.php" => ["Historia", "fas fa-book-open"],
                    "sistema-solar.php" => ["Sistema Solar", "fas fa-globe"],
                    "estrellas.php" => ["Estrellas", "fas fa-star"],
                    "galaxias.php" => ["Galaxias", "fas fa-circle"],
                    "agujeros-negros.php" => ["Agujeros Negros", "fas fa-circle-half-stroke"],
                    "astronautas.php" => ["Astronautas", "fas fa-user-astronaut"],
                    "telescopios.php" => ["Telescopios", "fas fa-binoculars"],
                    "eventos.php" => ["Eventos", "fas fa-calendar-alt"],   
                    "curiosidades.php" => ["Curiosidades", "fas fa-lightbulb"],
                    "exploracion-espacial.php" => ["Exploracion Espacial", "fas fa-rocket"],
                    "contacto.php" => ["Contacto", "fas fa-envelope"]
                ];


                foreach ($pages as $file => [$name, $icon]) {
                    $active = $currentPage === $file ? 'has-text-link has-text-weight-bold' : 'has-text-white';
                    echo "
                    <li class='mx-3 my-1 tw-text-center'>
                        <a href='{$file}' class='{$active} tw-flex tw-flex-col tw-items-center'>
                            <i class='{$icon} tw-text-lg'></i>
                            <span>{$name}</span>
                        </a>
                    </li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</header>
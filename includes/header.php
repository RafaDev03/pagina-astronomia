<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="tw-bg-gray-900 has-text-white py-4">
    <div class="container has-text-centered">
        <nav class="is-flex is-flex-wrap-wrap is-justify-content-center is-align-items-center">
            <ul class="is-flex is-flex-wrap-wrap is-align-items-center is-size-6">
                <?php
                $pages = [
                    "index.php" => "Inicio",
                    "historia.php" => "Historia",
                    "sistema-solar.php" => "Sistema Solar",
                    "estrellas.php" => "Estrellas",
                    "galaxias.php" => "Galaxias",
                    "agujeros-negros.php" => "Agujeros Negros",
                    "astronautas.php" => "Astronautas",
                    "telescopios.php" => "Telescopios",
                    "eventos.php" => "Eventos",
                    "contacto.php" => "Contacto",
                    "curiosidades.php" => "Curiosidades",
                    "exploracion-espacial.php" => "Exploracion Espacial"
                ];

                foreach ($pages as $file => $name) {
                    $active = $currentPage === $file ? 'has-text-link has-text-weight-bold' : 'has-text-white';
                    echo "<li class='mx-3 my-1'><a href='{$file}' class='{$active}'>{$name}</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</header>
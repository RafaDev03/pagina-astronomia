<!DOCTYPE html>
<html lang="es">
<?php include_once 'includes/head.php' ?>
<body class="has-background-dark">

    <?php include 'includes/header.php'; ?>

    <section class="hero is-black">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-8">
                        <h1 class="title is-1 has-text-white">Contacto</h1>
                        <div class="divider-gradient"></div>
                        <h2 class="subtitle is-4 has-text-grey-light mt-3">Envíanos tus preguntas astronómicas</h2>
                    </div>
                    <div class="column is-4 has-text-centered">
                        <figure class="image is-128x128 is-inline-block">
                            <img class="is-rounded" src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Contacto astronomía">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-background-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="box has-background-grey-darker contact-box">
                       <form action="procesar_contacto.php" method="POST">
                            <div class="field">
                                <label class="label has-text-white">Nombre</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="text" name="nombre" required>
                                    <span class="icon is-small is-left has-text-grey-light">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label has-text-white">Email</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="email" name="email" required>
                                    <span class="icon is-small is-left has-text-grey-light">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label has-text-white">Mensaje</label>
                                <div class="control">
                                    <textarea class="textarea custom-textarea" name="mensaje" required></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-warning is-fullwidth custom-submit-btn">
                                        <span class="icon">
                                            <i class="fas fa-paper-plane"></i>
                                        </span>
                                        <span>Enviar Mensaje</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="column is-5 is-offset-1">
                    <div class="box has-background-grey-darker contact-box">
                        <h3 class="title is-4 has-text-white mb-4">Nuestro equipo</h3>
                        
                        <!-- Integrante 1 -->
                        <div class="columns is-mobile is-vcentered mb-5">
                            <div class="column is-one-third">
                                <figure class="image is-128x128">
                                    <img class="team-member-img" src="assets/img/contacto/rafa.jpg" alt="Rafael Flores">
                                </figure>
                            </div>
                            <div class="column">
                                <h4 class="title is-5 has-text-white">Rafael Flores Rivera</h4>
                                <p class="subtitle is-6 has-text-grey-light">Astrónomo profesional</p>
                            </div>
                        </div>
                        
                        <!-- Integrante 2 -->
                        <div class="columns is-mobile is-vcentered mb-5">
                            <div class="column is-one-third">
                                <figure class="image is-128x128">
                                    <img class="team-member-img" src="assets/img/contacto/nicolas.jpeg" alt="Nicolas Requena">
                                </figure>
                            </div>
                            <div class="column">
                                <h4 class="title is-5 has-text-white">Nicolas Requena Castro</h4>
                                <p class="subtitle is-6 has-text-grey-light">Especialista en telescopios</p>
                            </div>
                        </div>
                        
                        <!-- Integrante 3 -->
                        <div class="columns is-mobile is-vcentered">
                            <div class="column is-one-third">
                                <figure class="image is-128x128">
                                    <img class="team-member-img" src="assets/img/contacto/gomez.jpg" alt="Andres Gomez">
                                </figure>
                            </div>
                            <div class="column">
                                <h4 class="title is-5 has-text-white">Andres Gomez Salvo</h4>
                                <p class="subtitle is-6 has-text-grey-light">Fotógrafo astronómico</p>
                            </div>
                        </div>
                        
                        <div class="content has-text-grey-light mt-5">
                            <p>Estamos disponibles para responder tus dudas sobre astronomía, observación de eventos y más.</p>
                            <p class="mt-4"><span class="icon has-text-warning"><i class="fas fa-envelope"></i></span> contacto@astronomia.com</p>
                            <p><span class="icon has-text-warning"><i class="fas fa-phone"></i></span> +51 987 456 789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
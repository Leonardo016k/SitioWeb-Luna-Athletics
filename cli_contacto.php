<?php 
    session_start();

    // VERIFICACIÓN DE SEGURIDAD
    // Si NO existe la variable de sesión 'usuario', significa que nadie se ha logueado.
    // Entonces, lo expulsamos al login.
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor, debes iniciar sesión para acceder a esta página.");
                window.location = "iniciar_sesion.php";
            </script>
        ';
        // session_destroy(); // Opcional: destruye cualquier residuo de sesión
        die(); // Detiene la ejecución del resto de la página
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LunaLift</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
    <link href="css/custom_lunalift.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?php include 'php/cli_menulift.php'; ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-0 position-relative" style="background-color: #05080f; background-image: none;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 450px; padding-top: 100px !important;">
            <h1 class="display-4 mb-3 text-white text-uppercase font-weight-bold">Contacto</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="inicio.php">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Contacto</p>
            </div>
        </div>
    </div>
    <!-- Header fin -->
    <!-- Contacto inicio -->
    <div class="container-fluid pt-5" style="background-color: #0B1120; min-height: 100vh;">
        <div class="container">
            
            <div class="section-title text-center mb-5">
                <h4 class="text-uppercase" style="letter-spacing: 5px; color: #00C2FF;">Contáctanos</h4>
                <h1 class="display-4 text-white">¿Dudas? Hablemos.</h1>
            </div>

            <div class="row px-3 pb-4">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 contact-icon"></i>
                    <h4 class="font-weight-bold text-white">Ubicación</h4>
                    <p style="color: #b0b3b8;">CD. Hidalgo, Michoacán</p> </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 contact-icon"></i>
                    <h4 class="font-weight-bold text-white">Teléfono</h4>
                    <p style="color: #b0b3b8;">+52 715-157-52-59</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 contact-icon"></i>
                    <h4 class="font-weight-bold text-white">Email</h4>
                    <p style="color: #b0b3b8;">Bluna375@gmail.com</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 443px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57129.31509821092!2d-100.60415419677422!3d19.69353225020797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cb7ce7f59609%3A0x59126b4fed61a928!2sCdad.%20Hidalgo%2C%20Mich.!5e1!3m2!1ses-419!2smx!4v1763789115452!5m2!1ses-419!2smx"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!-- formulario inicio -->
                <div class="col-md-6 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="name" placeholder="Tu Nombre"
                                    required="required" data-validation-required-message="Por favor ingresa tu nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control p-4" id="email" placeholder="Tu Email"
                                    required="required" data-validation-required-message="Por favor ingresa tu email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Asunto (Ej: Devolución, Tallas)"
                                    required="required" data-validation-required-message="Por favor ingresa el asunto" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Genero"
                                    required="required" data-validation-required-message="Por favor ingresa tu genero" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Escribe tu mensaje aquí..."
                                    required="required"
                                    data-validation-required-message="Por favor ingresa un mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn font-weight-bold py-3 px-5" type="submit" id="sendMessageButton"
                                        style="border: 2px solid #00C2FF; color: #00C2FF; background: transparent; width: 100%;">
                                    Enviar Mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- formulario fin -->
            </div>
        </div>
    </div>
    <!-- Contacto fin -->

    <!-- footer inicio -->
    <?php include 'php/footer.php' ?>
    <!-- footer fin -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color: #00C2FF; border-color: #00C2FF; color: black;"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
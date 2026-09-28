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
    <?php include 'php/cli_menulift.php' ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom" style="background-color: #05080f !important; background-image: none;">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Sobre Nosotros</h1>
                <div class="d-inline-flex mb-lg-5">
                    <p class="m-0 text-white"><a class="text-white" href="inicio.php">Inicio</a></p>
                    <p class="m-0 text-white px-2">/</p>
                    <p class="m-0" style="color: #00C2FF;">Sobre Nosotros</p> </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
<div class="container-fluid py-5" style="background-color: #0B1120;">
    <div class="container py-5"> <div class="section-title">
            <h4 class="text-uppercase" style="letter-spacing: 5px; color: #00C2FF;">Nuestra Esencia</h4>
            <h1 class="display-4 text-white">Nacidos en la Oscuridad</h1>
        </div>

        <div class="row">
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3 text-white">Nuestra Historia</h1>
                <p style="color: #cccccc;">La fuerza no se regala, se construye. LunaLift surgió de la necesidad de crear equipamiento que estuviera a la altura de esa construcción diaria. Nuestra misión es simple: empoderar a cada atleta para que supere sus propios límites, proporcionando ropa que combina tecnología de compresión avanzada con una estética visual impactante.</p>
                <p style="color: #cccccc;">En LunaLift, creemos que tu ropa es tu armadura. No diseñamos para las masas, diseñamos para los guerreros modernos.</p>
                
                <h5 class="mb-3 text-white mt-5"><i class="fa fa-check mr-2" style="color: #00C2FF;"></i>Diseños Exclusivos</h5>
                <h5 class="mb-3 text-white"><i class="fa fa-check mr-2" style="color: #00C2FF;"></i>Calidad Premium</h5>
                
                <a href="productos.php" class="btn font-weight-bold py-2 px-4 mt-2" style="border: 2px solid #00C2FF; color: #00C2FF; background: transparent;">Ver Colección</a>
            </div>

            <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100 d-flex align-items-center justify-content-center">
                    <img class="position-absolute rounded-circle shadow" src="imagenes/lunalift1.jpg" 
                         style="width: 350px; height: 350px; object-fit: cover; border: 4px solid #00C2FF;">
                </div>
            </div>

            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3 text-white">Nuestra Misión</h1>
                <p style="color: #cccccc;">En LunaLift queremos inspirarte a levantar más que peso: levantar tu energía, tu confianza y tu actitud. Creamos ropa deportiva cómoda, funcional y con estilo.</p>
                
                <h5 class="mb-3 text-white mt-5"><i class="fa fa-check mr-2" style="color: #00C2FF;"></i>Estilo Unico</h5>
                <h5 class="mb-3 text-white"><i class="fa fa-check mr-2" style="color: #00C2FF;"></i>Envíos Nacionales</h5>
            </div>
        </div> 
        <div class="row mt-5 pt-4">
            
            <div class="col-lg-6 mb-5">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-eye fa-2x mr-3" style="color: #00C2FF;"></i>
                    <h1 class="text-white text-uppercase font-weight-bold m-0">Nuestra Visión</h1>
                </div>
                <h4 class="mb-4" style="color: #cccccc; font-style: italic;">"Ser el estandarte global de quienes entrenan en las sombras."</h4>
                <p style="color: #b0b3b8; font-size: 1.1rem; line-height: 1.8;">
                    Convertirnos en una de las marcas fitness más influyentes, reconocida por motivar a una comunidad que vive el movimiento, la superación y el amor propio. En LunaLift, creemos que cada día es una nueva oportunidad para brillar, romper límites y elevar tu nivel. 
                </p>
            </div>

            <div class="col-lg-6">
                <h1 class="text-white text-uppercase font-weight-bold mb-4">Nuestros Valores</h1>
                <div class="row">
                    
                    <div class="col-md-6 mb-4">
                        <div class="p-4 h-100 d-flex flex-column justify-content-center" 
                             style="background-color: rgba(255, 255, 255, 0.05); border-left: 3px solid #00C2FF; border-radius: 5px;">
                            <i class="fa fa-bolt fa-2x mb-3" style="color: #00C2FF;"></i>
                            <h6 class="text-white font-weight-bold text-uppercase">Pasión por el movimiento</h6>
                            <p class="m-0 text-white-50 small">Amamos el fitness y la energía que transforma cuerpos y mentes.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="p-4 h-100 d-flex flex-column justify-content-center" 
                             style="background-color: rgba(255, 255, 255, 0.05); border-left: 3px solid #00C2FF; border-radius: 5px;">
                            <i class="fa fa-fingerprint fa-2x mb-3" style="color: #00C2FF;"></i>
                            <h6 class="text-white font-weight-bold text-uppercase">Autenticidad</h6>
                            <p class="m-0 text-white-50 small">Cada persona entrena a su ritmo y estilo. Nos encanta lo que te hace único.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="p-4 h-100 d-flex flex-column justify-content-center" 
                             style="background-color: rgba(255, 255, 255, 0.05); border-left: 3px solid #00C2FF; border-radius: 5px;">
                            <i class="fa fa-level-up-alt fa-2x mb-3" style="color: #00C2FF;"></i>
                            <h6 class="text-white font-weight-bold text-uppercase">Superación constante</h6>
                            <p class="m-0 text-white-50 small">No se trata de ser perfecto, sino de ser mejor que ayer.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="p-4 h-100 d-flex flex-column justify-content-center" 
                             style="background-color: rgba(255, 255, 255, 0.05); border-left: 3px solid #00C2FF; border-radius: 5px;">
                            <i class="fa fa-tshirt fa-2x mb-3" style="color: #00C2FF;"></i>
                            <h6 class="text-white font-weight-bold text-uppercase">Comodidad con estilo</h6>
                            <p class="m-0 text-white-50 small">Ropa que se ve bien, se siente mejor y rinde al máximo.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="p-4 h-100 d-flex flex-column justify-content-center" 
                             style="background-color: rgba(255, 255, 255, 0.05); border-left: 3px solid #00C2FF; border-radius: 5px;">
                            <i class="fa fa-users fa-2x mb-3" style="color: #00C2FF;"></i>
                            <h6 class="text-white font-weight-bold text-uppercase">Comunidad</h6>
                            <p class="m-0 text-white-50 small">Somos una familia fitness que se apoya, se motiva y crece junta.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="p-4 h-100 d-flex flex-column justify-content-center" 
                             style="background-color: rgba(255, 255, 255, 0.05); border-left: 3px solid #00C2FF; border-radius: 5px;">
                            <i class="fa fa-leaf fa-2x mb-3" style="color: #00C2FF;"></i>
                            <h6 class="text-white font-weight-bold text-uppercase">Conciencia</h6>
                            <p class="m-0 text-white-50 small">Apostamos por procesos responsables. Entrenar es cuidar el planeta.</p>
                        </div>
                    </div>

                </div>
            </div>
            
        </div> </div> </div> ```
    <!-- About End -->


    <!-- Footer Start -->
    <?php include 'php/footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LunaLift - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="../img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/estilos.css" rel="stylesheet">
    <link href="../css/custom_lunalift.css" rel="stylesheet">
</head>

<body>
    <?php include '../php/menu_in.php' ?>
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../imagenes/lunalift1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background-color: rgba(0, 40, 77, 0.7);">
                        <h1 class="display-1 text-white m-0">LUNALIFT</h1>
                        <h2 class="text-white m-0" style="letter-spacing: 5px;">GYM CLOTHING</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../imagenes/lunalift2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background-color: rgba(0, 40, 77, 0.7);">
                        <h1 class="display-1 text-white m-0">LUNALIFT</h1>
                        <h2 class="text-white m-0" style="letter-spacing: 5px;">GYM CLOTHING</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="container-fluid py-5" style="background-color: #0B1120;">
        <div class="container">
            <div class="section-title">
                <h4 class="text-uppercase" style="letter-spacing: 5px; color: #00C2FF;">About Us</h4>
                <h1 class="display-4 text-white">Serving Since 2024</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 py-0 py-lg-5">
                    <h1 class="mb-3 text-white">Our Story</h1>
                    <p style="color: #cccccc; font-size: 1.1rem;">
                        LunaLift was not born under the spotlight, but in the shadows. We understand that true growth happens when no one is watching: in the solitude of discipline and the burning of the last lift.
                    </p>
                    <a href="../nosotros.php" class="btn font-weight-bold py-2 px-4 mt-2" 
                       style="border: 2px solid #00C2FF; color: #00C2FF; background-color: transparent;">
                       Learn More
                    </a>
                </div>
                <div class="col-lg-6 py-5 py-lg-0 d-flex align-items-center justify-content-center" style="min-height: 500px;">
                    <img class="rounded-circle shadow" src="../imagenes/lunalift-3.jpg" 
                         style="width: 400px; height: 400px; object-fit: cover; border: 4px solid #00C2FF;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 py-5 text-center position-relative" style="background-color: #0B1120;">
        <div class="container py-5">
            <h1 class="display-3 mt-3 font-weight-bold" style="color: #00C2FF; text-transform: uppercase;">Offers</h1>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="offer-card">
                        <img src="../imagenes/comingsoon.jpg" alt="Offer Coming Soon" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../php/footer_in.php' ?>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color: #00C2FF; border-color: #00C2FF; color: black;"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
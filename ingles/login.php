<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LunaLift - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="../img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/custom_lunalift.css" rel="stylesheet">

</head>

<body>
    <?php include '../php/menu_in.php'; ?>
    <div class="container-fluid page-header mb-0 position-relative" style="background-color: #05080f; background-image: none;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px; padding-top: 100px !important;">
            <h1 class="display-4 mb-3 text-white text-uppercase font-weight-bold">Access</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Login</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-5" style="background-color: #0B1120; min-height: 80vh;">
        
        <div class="section-title text-center mb-5">
            <h4 class="text-uppercase" style="letter-spacing: 5px; color: #00C2FF;">Welcome</h4>
            <h1 class="display-4 text-white">Enter the Zone</h1>
        </div>

        <div class="container">
            <div class="login-container">
                <h2 class="login-title">Login</h2>
                
                <form action="../validar_usuario.php" method="post">
                    
                    <div class="form-group">
                        <label for="email_usu">Email Address</label>
                        <input name="email_usu" type="email" class="form-control" placeholder="example@mail.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="pas_usu">Password</label>
                        <div class="position-relative">
                            <input name="pas_usu" id="pas_usu" type="password" class="form-control" placeholder="••••••••" required style="padding-right: 45px;">
                            <i class="fa fa-eye toggle-password" id="icon-eye" onclick="mostrarPassLogin()"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn-login">LOG IN</button>
                    </div>
                    
                    <div class="register-link">
                        <p>Don't have an account? <a href="Register.php">Join the team here</a></p>
                    </div>

                </form>
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
    
    <script>
        function mostrarPassLogin() {
            var inputPass = document.getElementById("pas_usu");
            var icon = document.getElementById("icon-eye");

            if (inputPass.type === "password") {
                inputPass.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                inputPass.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
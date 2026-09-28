<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LunaLift - Register</title>
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
            <h1 class="display-4 mb-3 text-white text-uppercase font-weight-bold">Register</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Register</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5" style="background-color: #0B1120; min-height: 100vh;">
        <div class="container">
            
            <div class="section-title text-center mb-5">
                <h4 class="text-uppercase" style="letter-spacing: 5px; color: #00C2FF;">Join the Team</h4>
                <h1 class="display-4 text-white">Create Account</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="register-form">
                        <form action="../php/registro_usuario_be.php" method="POST" autocomplete="off">
                            
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastname1">Last Name</label>
                                    <input type="text" class="form-control" id="lastname1" name="lastname1" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastname2">Second Last Name</label>
                                    <input type="text" class="form-control" id="lastname2" name="lastname2" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" required>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="marital-status">Marital Status</label>
                                    <select id="marital-status" name="marital-status" class="form-control" required>
                                        <option value="" style="color: #000;">Select...</option>
                                        <option value="single" style="color: #000;">Single</option>
                                        <option value="married" style="color: #000;">Married</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Gender</label>
                                    <div class="d-flex align-items-center h-100">
                                        <div class="custom-control custom-radio mr-3">
                                            <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
                                            <label class="custom-control-label" for="male">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="female" name="gender" value="Female" class="custom-control-input" required>
                                            <label class="custom-control-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="mail">Email Address</label>
                                    <input type="email" class="form-control" id="mail" name="mail" required autocomplete="new-password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telephone">Phone Number</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="birthdate">Date of Birth</label>
                                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="password" name="password" required style="padding-right: 45px;" autocomplete="new-password">
                                    <i class="fa fa-eye toggle-password" onclick="mostrarContrasena()"></i>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn-register">Sign Up</button>
                            </div>
                        </form>
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
    
    <script>
    function mostrarContrasena() {
        const inputPass = document.getElementById('password');
        const icono = document.querySelector('.toggle-password');

        if (inputPass.type === "password") {
            inputPass.type = "text"; 
            icono.classList.remove('fa-eye');
            icono.classList.add('fa-eye-slash'); 
        } else {
            inputPass.type = "password"; 
            icono.classList.remove('fa-eye-slash');
            icono.classList.add('fa-eye'); 
        }
    }
    </script>
</body>

</html>
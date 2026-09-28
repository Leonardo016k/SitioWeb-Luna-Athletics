<?php 
    session_start();

    // SEGURIDAD: Solo Admin puede entrar aquí
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['rol']) || $_SESSION['rol'] != 'Admin'){
        echo '<script>window.location = "iniciar_sesion.php";</script>';
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registrar Usuario - LunaLift Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom_lunalift.css" rel="stylesheet">

    <link href="css/custom_admin_lunalift.css" rel="stylesheet">
</head>

<body>
    <?php include 'php/adm_menu.php'; ?>

    <div class="container-fluid page-header mb-5 position-relative" style="background-color: #05080f; background-image: none;">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 300px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Nuevo Usuario</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="adm_index.php">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Registrar</p>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5" style="background-color: #0B1120; min-height: 80vh;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="admin-form-card">
                    <h2 class="text-center text-white mb-4 text-uppercase font-weight-bold">Datos del Usuario</h2>
                    
                    <form method="POST" action="php/adm_registrar_usuario.php" autocomplete="off">
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input name="ema_email" type="email" class="form-control" required placeholder="correo@ejemplo.com" />
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nombre</label>
                                <input type="text" name="txt_Nombre" class="form-control" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Apellido Paterno</label>
                                <input type="text" name="txt_ApPat" class="form-control" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Apellido Materno</label>
                                <input type="text" name="txt_ApMat" class="form-control" required />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tipo de Usuario (Rol)</label>
                                <select name="lst_Tipo" class="form-control" required>
                                    <option value="" style="color: #f3f3f3ff;">Seleccionar...</option>
                                    <option value="Admin" style="color: #f3f3f3ff;">Administrador</option>
                                    <option value="Usuario" style="color: #f3f3f3ff;">Cliente</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Género</label>
                                <select name="gender" class="form-control" required>
                                    <option value="" style="color: #f3f3f3ff;">Seleccionar...</option>
                                    <option value="Masculino" style="color: #f3f3f3ff;">Masculino</option>
                                    <option value="Femenino" style="color: #f3f3f3ff;">Femenino</option>
                                    <option value="Otro" style="color: #f3f3f3ff;">Otro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Contraseña</label>
                                <div class="password-wrapper">
                                    <input name="pas_password" id="pass1" type="password" class="form-control" required style="padding-right: 45px;" />
                                    <i class="fa fa-eye toggle-password" onclick="togglePass('pass1', this)"></i>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Confirmar Contraseña</label>
                                <div class="password-wrapper">
                                    <input name="pas_password2" id="pass2" type="password" class="form-control" required style="padding-right: 45px;" />
                                    <i class="fa fa-eye toggle-password" onclick="togglePass('pass2', this)"></i>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" class="btn-save">Guardar Usuario</button>
                            <a href="adm_usuario.php" class="btn btn-link text-danger mt-3">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'php/footer.php' ?>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color: #00C2FF; border-color: #00C2FF; color: black;"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function togglePass(inputId, iconElement) {
            var input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
                iconElement.classList.remove('fa-eye');
                iconElement.classList.add('fa-eye-slash');
            } else {
                input.type = "password";
                iconElement.classList.remove('fa-eye-slash');
                iconElement.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
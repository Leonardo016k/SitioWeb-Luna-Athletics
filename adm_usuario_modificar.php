<?php 
    session_start();
    
    // SEGURIDAD: Solo Admin
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['rol']) || $_SESSION['rol'] != 'Admin'){
        header('Location: iniciar_sesion.php'); 
        exit();
    }

    include("php/conexion.php"); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Modificar Usuario - LunaLift</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom_lunalift.css" rel="stylesheet">
    <link href="css/custom_admin_lunalift.css" rel="stylesheet">
    
</head>

<body>
    <?php include 'php/adm_menu.php'; ?>

    <div class="container-fluid page-header mb-0 position-relative" style="background-color: #05080f; background-image: none;">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 450px; padding-top: 150px !important;">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Modificar</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="adm_index.php">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Editar Usuario</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" style="background-color: #0B1120; min-height: 100vh;">
        <div class="container">
            
            <div class="section-title text-center mb-5">
                <h4 class="text-uppercase" style="letter-spacing: 5px; color: #00C2FF;">Gestión</h4>
                <h1 class="display-4 text-white">Actualizar Datos</h1>
            </div>

            <?php 
                if(isset($_GET['id'])) {
                    $var_id = $_GET['id'];
                    $query = "SELECT * FROM usuarios WHERE id_usu = '$var_id'";
                    $result = mysqli_query($conexion, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="edit-card">
                        <form method="post" action="php/adm_modificar_usuario.php">
                            <input type="hidden" name="hid_id" value="<?php echo $row['id_usu']; ?>" />

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="ema_email" class="form-control" required value="<?php echo $row['email_usu']; ?>" />
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Nombre</label>
                                    <input type="text" name="txt_Nombre" class="form-control" value="<?php echo $row['nom_usu']; ?>" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Apellido Paterno</label>
                                    <input type="text" name="txt_ApPat" class="form-control" value="<?php echo $row['ape_pat_usu']; ?>" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Apellido Materno</label>
                                    <input type="text" name="txt_ApMat" class="form-control" value="<?php echo $row['ape_mat_usu']; ?>" />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tipo de Usuario (Rol)</label>
                                    <select name="lst_Tipo" class="form-control">
                                        <option value="<?php echo $row['tipo_usu']; ?>" selected style="background-color: #333;"><?php echo $row['tipo_usu']; ?> (Actual)</option>
                                        <option value="Admin" style="color: #e9e9e9ff;">Administrador</option>
                                        <option value="Usuario" style="color: #e9e9e9ff;">Cliente</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Género</label>
                                    <select name="gender" class="form-control">
                                        <option value="<?php echo $row['genero']; ?>" selected style="background-color: #333;"><?php echo $row['genero']; ?> (Actual)</option>
                                        <option value="Masculino" style="color: #e9e9e9ff;">Masculino</option>
                                        <option value="Femenino" style="color: #e9e9e9ff;">Femenino</option>
                                        <option value="Otro" style="color: #e9e9e9ff;">Otro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nueva Contraseña <small class="text-muted">(Dejar en blanco para no cambiar)</small></label>
                                <div class="password-wrapper">
                                    <input type="password" id="newPass" name="pas_password" class="form-control" placeholder="Escribe solo si quieres cambiarla" style="padding-right: 45px;">
                                    <i class="fa fa-eye toggle-password" onclick="mostrarPass('newPass', this)"></i>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" class="btn-update">Guardar Cambios</button>
                                <a href="adm_usuario.php" class="btn btn-link text-danger mt-3">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
                        } 
                    } else {
                        echo "<div class='alert alert-danger text-center'>No se encontró el usuario.</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning text-center'>Falta el ID del usuario.</div>";
                }
            ?>
        </div>
    </div>

    <?php include 'php/footer.php' ?>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color: #00C2FF; border-color: #00C2FF; color: black;"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function mostrarPass(idInput, iconElement) {
            var input = document.getElementById(idInput);
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
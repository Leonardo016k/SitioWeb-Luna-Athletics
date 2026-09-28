<?php 
    session_start();

    // SEGURIDAD: Solo Admin entra aquí
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['rol']) || $_SESSION['rol'] != 'Admin'){
        echo '<script>window.location = "iniciar_sesion.php";</script>';
        die();
    }

    include("php/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Gestión de Usuarios - LunaLift</title>
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

<body style="background-color: #0B1120;">
    <?php include 'php/adm_menu.php'; ?>
    <div class="container-fluid page-header mb-5 position-relative" style="background-color: #05080f; background-image: none;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 450px; padding-top: 150px !important;">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Usuarios</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="adm_index.php">Panel</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Gestión de Usuarios</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-white text-uppercase font-weight-bold">Lista de Usuarios</h2>
                <a href="adm_usuario_registrar.php" class="btn-create"><i class="fa fa-plus mr-2"></i>Nuevo Usuario</a>
            </div>

            <div class="table-responsive">
                <table class="table table-dark-gym table-hover text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Género</th>
                            <th>Contraseña</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Consulta SQL directa
                            $query = "SELECT * FROM usuarios";
                            $result = mysqli_query($conexion, $query);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id_usu']; ?></td>
                                <td><?php echo $row['nom_usu']; ?></td>
                                <td><?php echo $row['ape_pat_usu'] . " " . $row['ape_mat_usu']; ?></td>
                                <td><?php echo $row['email_usu']; ?></td>
                                
                                <td style="font-weight: bold; color: <?php echo ($row['tipo_usu'] == 'Admin') ? '#00C2FF' : '#ccc'; ?>">
                                    <?php echo $row['tipo_usu']; ?>
                                </td>
                                
                                <td><?php echo $row['genero']; ?></td>
                                
                                <td><span class="badge badge-dark"><i class="fa fa-lock mr-1"></i>Protegida</span></td>
                                
                                <td>
                                    <a href="adm_usuario_modificar.php?id=<?php echo $row['id_usu']; ?>" class="btn-action btn-edit" title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="adm_usuario_eliminar.php?id=<?php echo $row['id_usu']; ?>" onclick="return confirmarEliminacion()" class="btn-action btn-delete" title="Eliminar">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                                }
                            } else {
                                echo "<tr><td colspan='8' class='text-center py-4'>No hay usuarios registrados.</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php include 'php/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    
    <script>
      function confirmarEliminacion() {
        return confirm("¿Realmente desea eliminar este usuario? Esta acción no se puede deshacer.");
      }
    </script>
</body>
</html>
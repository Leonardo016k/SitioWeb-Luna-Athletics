<?php
    // 1. Iniciar Sesión
    session_start();

    // 2. SEGURIDAD: Verificar si el usuario es Admin
    // Si NO existe la sesión 'usuario' O el rol NO es 'Admin', lo sacamos
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['rol']) || $_SESSION['rol'] != 'Admin'){
        echo '
            <script>
                alert("Acceso denegado. No tienes permisos de administrador.");
                window.location = "iniciar_sesion.php";
            </script>
        ';
        die(); // Detiene el código
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Panel Admin - LunaLift</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom_lunalift.css" rel="stylesheet">
    <link href="css/custom_admin_lunalift.css" rel="stylesheet">
    <!-- Estilos Específicos del Panel -->
</head>

<body>
    <!-- Navbar (Menu del Admin) -->
    <!-- Puedes crear un archivo php/admin_menu.php diferente si quieres opciones distintas -->
    <?php include 'php/adm_menu.php'; ?>

    <!-- Header de Bienvenida -->
    <div class="container-fluid admin-header">
        <div class="container">
            <h4 class="welcome-text mb-3">Panel de Control</h4>
            <h1 class="display-4 text-white font-weight-bold">
                Bienvenido, <?php echo $_SESSION['usuario']; ?>
            </h1>
            <p class="lead text-white-50">Tienes el control total del sistema LunaLift.</p>
        </div>
    </div>

    <!-- Panel de Opciones (Dashboard) -->
    <div class="container pt-5 pb-5">
        <div class="row">
            
            <!-- Tarjeta 1: Productos -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="admin-card">
                    <i class="fa fa-tshirt admin-icon"></i>
                    <h3>Productos</h3>
                    <p class="text-white-50">Gestionar inventario, precios y añadir nueva ropa.</p>
                    <a href="#" class="btn-admin">Administrar</a>
                </div>
            </div>

            <!-- Tarjeta 2: Usuarios -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="admin-card">
                    <i class="fa fa-users admin-icon"></i>
                    <h3>Usuarios</h3>
                    <p class="text-white-50">Ver lista de clientes registrados y sus datos.</p>
                    <a href="adm_usuario.php" class="btn-admin">Ver Usuarios</a>
                </div>
            </div>

            <!-- Tarjeta 3: Pedidos (Simulación) -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="admin-card">
                    <i class="fa fa-shopping-cart admin-icon"></i>
                    <h3>Pedidos</h3>
                    <p class="text-white-50">Revisar órdenes de compra y envíos pendientes.</p>
                    <a href="#" class="btn-admin">Ver Pedidos</a>
                </div>
            </div>

            <!-- Tarjeta 4: Reportes -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="admin-card">
                    <i class="fa fa-chart-line admin-icon"></i>
                    <h3>Reportes</h3>
                    <p class="text-white-50">Estadísticas de ventas y rendimiento.</p>
                    <a href="#" class="btn-admin">Ver Gráficos</a>
                </div>
            </div>

            <!-- Tarjeta 5: Configuración -->
            <!-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="admin-card">
                    <i class="fa fa-cogs admin-icon"></i>
                    <h3>Configuración</h3>
                    <p class="text-white-50">Ajustes generales del sitio web.</p>
                    <a href="#" class="btn-admin">Editar</a>
                </div>
            </div> -->

            <!-- Tarjeta 6: Cerrar Sesión -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="admin-card" style="border-color: #ff4444;">
                    <i class="fa fa-sign-out-alt admin-icon" style="color: #ff4444;"></i>
                    <h3 class="text-white">Salir</h3>
                    <p class="text-white-50">Cerrar sesión de administrador de forma segura.</p>
                    <a href="logout.php" class="btn-admin" style="border-color: #ff4444; color: #ff4444;">Cerrar Sesión</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include 'php/footer.php' ?>

    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php
    // 1. Detectar el nombre del archivo actual para pintar de azul la pestaña
    $pagina_actual = basename($_SERVER['PHP_SELF']);
?>

<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3" style="background-color: #0B1120;">
        
        <a href="adm_index.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">
                <img src="imagenes/logoluna2.png" alt="" class="img" style="width: 85px;">LUNALIFT
            </h1>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                
                <a href="adm_index.php" class="nav-item nav-link <?php echo ($pagina_actual == 'adm_index.php' || $pagina_actual == 'adm_index.php') ? 'active' : ''; ?>">
                    <i class="fa fa-tachometer-alt mr-1"></i> Panel
                </a>
                
                <a href="adm_usuario.php" class="nav-item nav-link <?php echo ($pagina_actual == 'adm_usuario.php') ? 'active' : ''; ?>">
                    Usuarios
                </a> 

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #00C2FF; font-weight: bold;">
                        <i class="fa fa-user-shield mr-1"></i> 
                        <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Admin'; ?>
                    </a>
                    <div class="dropdown-menu text-capitalize" style="background-color: #05080f; border: 1px solid #333;">
                        <a href="logout.php" class="dropdown-item text-danger">
                            <i class="fa fa-sign-out-alt mr-2"></i> Cerrar Sesión
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
<?php
    // 1. Detectar el nombre del archivo actual
    $pagina_actual = basename($_SERVER['PHP_SELF']);
?>

<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3" style="background-color: #0B1120;">
        <a href="cli_inicio.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">
                <img src="imagenes/logoluna2.png" alt="" class="img" style="width: 85px;">LUNALIFT
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                
                <a href="cli_inicio.php" class="nav-item nav-link <?php echo ($pagina_actual == 'cli_inicio.php') ? 'active' : ''; ?>">Inicio</a>
                
                <a href="cli_nosotros.php" class="nav-item nav-link <?php echo ($pagina_actual == 'cli_nosotros.php') ? 'active' : ''; ?>">Nosotros</a> 
                
                <a href="cli_productos.php" class="nav-item nav-link <?php echo ($pagina_actual == 'cli_productos.php') ? 'active' : ''; ?>">Productos</a>
                
                <a href="cli_contacto.php" class="nav-item nav-link <?php echo ($pagina_actual == 'cli_contacto.php') ? 'active' : ''; ?>">Contacto</a>

                <a href="cli_Ecoweb.php" class="nav-item nav-link <?php echo ($pagina_actual == 'cli_Ecoweb.php') ? 'active' : ''; ?>">Ecoweb</a>
                
                <a href="index.php" class="nav-item nav-link text-danger">Cerrar Sesion</a>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Idioma</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="ingles/index.php" class="dropdown-item">Ingles</a>
                        <a href="cli_inicio.php" class="dropdown-item">Español</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
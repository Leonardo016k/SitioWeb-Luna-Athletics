<?php
    // 1. Obtenemos el nombre del archivo actual
    $pagina_actual = basename($_SERVER['PHP_SELF']);
?>

<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3" style="background-color: #0B1120;">
        <a href="inicio.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">
                <img src="imagenes/logoluna2.png" alt="" class="img" style="width: 85px;">LUNALIFT
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                
                <a href="index.php" class="nav-item nav-link <?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>">Inicio</a>
                
                <a href="nosotros.php" class="nav-item nav-link <?php echo ($pagina_actual == 'nosotros.php') ? 'active' : ''; ?>">Nosotros</a> 
                
                <a href="productos.php" class="nav-item nav-link <?php echo ($pagina_actual == 'productos.php') ? 'active' : ''; ?>">Productos</a>
                
                <a href="contacto.php" class="nav-item nav-link <?php echo ($pagina_actual == 'contacto.php') ? 'active' : ''; ?>">Contacto</a>
                
                <a href="Registro.php" class="nav-item nav-link <?php echo ($pagina_actual == 'Registro.php') ? 'active' : ''; ?>">Registro</a>

                <a href="Ecoweb.php" class="nav-item nav-link <?php echo ($pagina_actual == 'Ecoweb.php') ? 'active' : ''; ?>">Ecoweb</a>
                
                <a href="Iniciar_sesion.php" class="nav-item nav-link <?php echo ($pagina_actual == 'Iniciar_sesion.php') ? 'active' : ''; ?>">Iniciar Sesion</a>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-globe mr-1"></i> Idioma
                    </a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="ingles/index.php" class="dropdown-item">Inglés</a>
                        <a href="index.php" class="dropdown-item">Español</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
<?php
    // 1. Detect current filename for active state
    $pagina_actual = basename($_SERVER['PHP_SELF']);
?>

<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3" style="background-color: #0B1120;">
        
        <a href="index.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">
                <img src="../imagenes/logoluna2.png" alt="" class="img" style="width: 85px;">LUNALIFT
            </h1>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                
                <a href="index.php" class="nav-item nav-link <?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>">Home</a>
                
                <a href="about us.php" class="nav-item nav-link <?php echo ($pagina_actual == 'about us.php') ? 'active' : ''; ?>">About Us</a> 
                
                <a href="products.php" class="nav-item nav-link <?php echo ($pagina_actual == 'products.php') ? 'active' : ''; ?>">Products</a>
                
                <a href="contact.php" class="nav-item nav-link <?php echo ($pagina_actual == 'contact.php') ? 'active' : ''; ?>">Contact</a>
                
                <a href="register.php" class="nav-item nav-link <?php echo ($pagina_actual == 'register.php') ? 'active' : ''; ?>">Register</a>

                <a href="Ecoweb.php" class="nav-item nav-link <?php echo ($pagina_actual == 'Ecoweb.php') ? 'active' : ''; ?>">Ecoweb</a>

                <a href="login.php" class="nav-item nav-link <?php echo ($pagina_actual == 'login.php') ? 'active' : ''; ?>">Login</a>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>" data-toggle="dropdown">Language</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="index.php" class="dropdown-item">English</a>
                        <a href="../index.php" class="dropdown-item">Spanish</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
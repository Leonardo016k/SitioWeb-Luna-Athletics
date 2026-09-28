<?php 
    session_start();

    // VERIFICACIÓN DE SEGURIDAD
    // Si NO existe la variable de sesión 'usuario', significa que nadie se ha logueado.
    // Entonces, lo expulsamos al login.
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor, debes iniciar sesión para acceder a esta página.");
                window.location = "iniciar_sesion.php";
            </script>
        ';
        // session_destroy(); // Opcional: destruye cualquier residuo de sesión
        die(); // Detiene la ejecución del resto de la página
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Carrito - LunaLift</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/style.min.css" rel="stylesheet">
    
    <link href="css/custom_lunalift.css" rel="stylesheet">

</head>

<body>
    <?php include 'php/cli_menulift.php'; ?>

    <div class="container-fluid page-header mb-0 position-relative" style="background-color: #05080f; background-image: none;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 450px; padding-top: 150px !important;">
            <h1 class="display-4 mb-3 text-white text-uppercase font-weight-bold">Tu Carrito</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="cli_productos.php">Productos</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Carrito</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" style="background-color: #0B1120; min-height: 100vh;">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <div class="table-responsive cart-table">
                        <table class="table text-center mb-0">
                            <thead class="text-white">
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Quitar</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <tr>
                                    <td class="text-left pl-4">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/shorts.jpg" alt="" class="cart-img mr-3">
                                            <span style="font-weight: 600;">Shorts "Urban Chaos"</span>
                                        </div>
                                    </td>
                                    <td class="align-middle">$850.00</td>
                                    <td class="align-middle">
                                        <input type="number" class="qty-input-cart" value="1" min="1">
                                    </td>
                                    <td class="align-middle font-weight-bold" style="color: #00C2FF;">$850.00</td>
                                    <td class="align-middle">
                                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-left pl-4">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/pants.jpg" alt="" class="cart-img mr-3">
                                            <span style="font-weight: 600;">Joggers "Arctic Flow"</span>
                                        </div>
                                    </td>
                                    <td class="align-middle">$450.00</td>
                                    <td class="align-middle">
                                        <input type="number" class="qty-input-cart" value="2" min="1">
                                    </td>
                                    <td class="align-middle font-weight-bold" style="color: #00C2FF;">$900.00</td>
                                    <td class="align-middle">
                                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        <a href="cli_productos.php" class="btn font-weight-bold py-3 px-4" 
                           style="border: 2px solid #00C2FF; color: #00C2FF; background: transparent; border-radius: 30px;">
                           <i class="fa fa-arrow-left mr-2"></i> Seguir Comprando
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h3 class="text-white text-uppercase font-weight-bold mb-4">Resumen</h3>
                        
                        <div class="summary-item">
                            <span>Subtotal</span>
                            <span>$1,750.00</span>
                        </div>
                        <div class="summary-item">
                            <span>Envío</span>
                            <span>$150.00</span>
                        </div>
                        
                        <div class="summary-total">
                            <span>Total</span>
                            <span style="color: #00C2FF;">$1,900.00</span>
                        </div>

                        <button class="btn-checkout" onclick="mostrarAlertaPago()">Proceder al Pago</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'php/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function mostrarAlertaPago() {
            // Opción 1: Alerta simple del navegador
            // alert("Lo sentimos, las ventas en línea no están disponibles por el momento. Inténtalo más tarde.");

            // Opción 2: Alerta estilizada (Más acorde a tu diseño Dark Gym)
            // Creamos el div de la alerta dinámicamente
            const alerta = document.createElement('div');
            alerta.style.position = 'fixed';
            alerta.style.top = '20px';
            alerta.style.left = '50%';
            alerta.style.transform = 'translateX(-50%)';
            alerta.style.backgroundColor = '#05080f'; // Fondo oscuro
            alerta.style.color = '#fff';
            alerta.style.padding = '20px';
            alerta.style.border = '2px solid #ff4444'; // Borde rojo para indicar error/atención
            alerta.style.borderRadius = '10px';
            alerta.style.boxShadow = '0 0 20px rgba(255, 68, 68, 0.4)';
            alerta.style.zIndex = '10000';
            alerta.style.textAlign = 'center';
            alerta.innerHTML = '<i class="fa fa-exclamation-triangle fa-2x mb-2" style="color: #ff4444;"></i><br><strong>¡Atención!</strong><br>Las ventas en línea no están disponibles por el momento.<br>Estamos trabajando en ello.';

            document.body.appendChild(alerta);

            // Eliminar la alerta después de 4 segundos
            setTimeout(() => {
                alerta.style.transition = 'opacity 0.5s ease';
                alerta.style.opacity = '0';
                setTimeout(() => alerta.remove(), 500);
            }, 4000);
        }
    </script>
</body>

</html>
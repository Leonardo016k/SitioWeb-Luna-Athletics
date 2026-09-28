<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LunaLift - Products</title>
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
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 450px; padding-top: 100px !important;">
            <h1 class="display-4 mb-3 text-white text-uppercase font-weight-bold">Collection</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0" style="color: #00C2FF;">Products</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5" style="background-color: #0B1120; min-height: 100vh;">
        <div class="container">
            
            <div class="section-title text-center mb-5">
                <h4 class="text-uppercase" style="letter-spacing: 5px; color: #00C2FF;">Catalog</h4>
                <h1 class="display-4 text-white">Elite Gear</h1>
            </div>

            <div class="row mb-5 align-items-center">
                <div class="col-lg-10 col-md-10">
                    <input type="text" id="input-buscar" placeholder="Search item (Ex: Hoodie, Shorts...)" onkeyup="buscarProducto()">
                </div>
                <!-- <div class="col-lg-2 col-md-2 text-center">
                    <a href="cart.php" class="btn btn-outline-light rounded-circle p-3" style="border-color: #00C2FF;">
                        <i class="fa fa-shopping-cart fa-lg" style="color: #00C2FF;"></i>
                    </a>
                </div> -->
            </div>

            <div class="row" id="productos">   
                
                <div class="col-lg-4 col-md-6 mb-4 producto">
                    <div class="producto-card">
                        <div class="producto-img-container">
                            <img src="../imagenes/playerlift1.jpg" alt="T-Shirt">
                        </div>
                        <div class="producto-info">
                            <p class="nombre-producto">"LunaLift" Black T-Shirt</p>
                            <p class="precio-producto">$850.00</p>
                            <!-- <div>
                                <input type="number" id="cant-1" class="qty-input" value="1" min="1">
                                <button class="btn-add-cart" onclick="agregarCarrito('Gothic Hoodie Reaper', 'cant-1')">
                                    <i class="fa fa-plus mr-2"></i>Add
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 producto">
                    <div class="producto-card">
                        <div class="producto-img-container">
                            <img src="../imagenes/gtr.jpg" alt="T-Shirt">
                        </div>
                        <div class="producto-info">
                            <p class="nombre-producto">"GTR" Gray T-Shirt</p>
                            <p class="precio-producto">$550.00</p>
                            <!-- <div>
                                <input type="number" id="cant-2" class="qty-input" value="1" min="1">
                                <button class="btn-add-cart" onclick="agregarCarrito('Compression Tee Veins', 'cant-2')">
                                    <i class="fa fa-plus mr-2"></i>Add
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 producto">
                    <div class="producto-card">
                        <div class="producto-img-container">
                            <img src="../imagenes/zeus.png" alt="Shorts">
                        </div>
                        <div class="producto-info">
                            <p class="nombre-producto">"Zeus" Gray T-Shirt</p>
                            <p class="precio-producto">$450.00</p>
                            <!-- <div>
                                <input type="number" id="cant-3" class="qty-input" value="1" min="1">
                                <button class="btn-add-cart" onclick="agregarCarrito('Shorts Lift or Die', 'cant-3')">
                                    <i class="fa fa-plus mr-2"></i>Add
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 producto">
                    <div class="producto-card">
                        <div class="producto-img-container">
                            <img src="../imagenes/lunalift1.jpg" alt="Tank Top">
                        </div>
                        <div class="producto-info">
                            <p class="nombre-producto">Tank Top "Oversize"</p>
                            <p class="precio-producto">$380.00</p>
                            <!-- <div>
                                <input type="number" id="cant-4" class="qty-input" value="1" min="1">
                                <button class="btn-add-cart" onclick="agregarCarrito('Tank Top Oversize', 'cant-4')">
                                    <i class="fa fa-plus mr-2"></i>Add
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 producto">
                    <div class="producto-card">
                        <div class="producto-img-container">
                            <img src="../imagenes/pants.jpg" alt="Pants">
                        </div>
                        <div class="producto-info">
                            <p class="nombre-producto">Joggers "Arctic Flow"</p>
                            <p class="precio-producto">$700.00</p>
                            <!-- <div>
                                <input type="number" id="cant-5" class="qty-input" value="1" min="1">
                                <button class="btn-add-cart" onclick="agregarCarrito('Tactical Joggers', 'cant-5')">
                                    <i class="fa fa-plus mr-2"></i>Add
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 producto">
                    <div class="producto-card">
                        <div class="producto-img-container">
                            <img src="../imagenes/shorts.jpg" alt="Shorts">
                        </div>
                        <div class="producto-info">
                            <p class="nombre-producto">Shorts "Urban Chaos"</p>
                            <p class="precio-producto">$250.00</p>
                            <!-- <div>
                                <input type="number" id="cant-6" class="qty-input" value="1" min="1">
                                <button class="btn-add-cart" onclick="agregarCarrito('Lifting Straps Pro', 'cant-6')">
                                    <i class="fa fa-plus mr-2"></i>Add
                                </button>
                            </div> -->
                        </div>
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
        function agregarCarrito(nombreProducto, idCantidad) {
            const cantidad = document.getElementById(idCantidad).value;
    
            const mensaje = document.createElement('div');
            mensaje.textContent = `${cantidad} x ${nombreProducto} added to cart`;
            mensaje.style.position = 'fixed';
            mensaje.style.bottom = '20px';
            mensaje.style.right = '20px';
            mensaje.style.backgroundColor = '#05080f';
            mensaje.style.color = '#00C2FF';
            mensaje.style.border = '1px solid #00C2FF';
            mensaje.style.padding = '15px';
            mensaje.style.borderRadius = '10px';
            mensaje.style.boxShadow = '0 0 15px rgba(0, 194, 255, 0.3)';
            mensaje.style.zIndex = '9999';
    
            document.body.appendChild(mensaje);
    
            setTimeout(() => {
                mensaje.style.transition = 'opacity 0.5s';
                mensaje.style.opacity = '0';
                setTimeout(() => {
                    mensaje.remove();
                }, 500);
            }, 3000);
        }
    </script>

    <script>
    function buscarProducto() {
        const input = document.getElementById("input-buscar");
        const filter = input.value.toLowerCase();
        const productosContainer = document.getElementById("productos");
        const items = productosContainer.getElementsByClassName("producto");
    
        for (let i = 0; i < items.length; i++) {
            const nombreProducto = items[i].getElementsByClassName("nombre-producto")[0];
            const texto = nombreProducto.textContent || nombreProducto.innerText;
            if (texto.toLowerCase().indexOf(filter) > -1) {
                items[i].style.display = "";
            } else {
                items[i].style.display = "none";
            }
        }
    }
    </script>
    
</body>
</html>
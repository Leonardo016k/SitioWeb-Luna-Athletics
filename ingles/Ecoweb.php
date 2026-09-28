<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOWEB</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/custom_lunalift.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #f4f6f9;
        }

        /* --- ESTILOS GENERALES --- */
        .main-header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 3rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* Títulos de División */
        .division-header {
            text-align: center;
            margin: 60px 0 30px 0;
            padding-bottom: 15px;
            border-bottom: 3px solid #dee2e6;
            color: #495057;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
        }
        
        /* Contenedor LEONARDO (Azul) */
        .carousel-section {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 40px;
            border-left: 5px solid #2a5298; 
        }

        /* Contenedor GUSTAVO (Rojo) */
        .carousel-section-gustavo {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 40px;
            border-left: 5px solid #d9534f; 
        }

        /* Contenedor EDUARDO (Verde) */
        .carousel-section-eduardo {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 40px;
            border-left: 5px solid #28a745; /* Color verde para diferenciar */
        }

        .section-title {
            color: #333;
            font-weight: 700;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        /* --- Estilos Imágenes Generales --- */
        .img-single-slide {
            border-radius: 8px;
            object-fit: cover;
            width: 100%;
            max-height: 550px; 
        }

        /* --- Estilos Imágenes Grid (Gustavo) --- */
        .image-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
            margin-bottom: 15px;
        }
        .image-card:hover {
            transform: scale(1.02);
            z-index: 10;
        }
        .image-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .card-caption {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 5px;
            text-align: center;
        }
        
        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 10px;
        }

        /* Controles */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #333;
            border-radius: 50%;
            padding: 25px;
            background-size: 50%, 50%;
        }

        /* Footer */
        footer {
            background-color: #0B1120;
            color: #ccc;
            padding: 40px 0;
            margin-top: 50px;
        }
        
        /* Placeholder para Eduardo (Gris mientras agregas fotos) */
        .eduardo-placeholder {
            background-color: #e9ecef;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            border-radius: 8px;
            border: 2px dashed #adb5bd;
        }
    </style>
</head>
<body>

    <?php include '../php/menu_in.php'; ?>
    <header class="main-header">
        <div class="container">
            <h1>Bitácora de Seguimiento: La Flor</h1>
            <p class="lead">Comparativa de resultados por alumno</p>
        </div>
    </header>

    <div class="container">

        <h2 class="division-header">1. Integrante: Leonardo Reyes</h2>

        <div class="carousel-section">
            <h3 class="section-title">Tema 1: El Inicio (Leonardo)</h3>
            <div id="carruselLeo1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor1ReyesLeonardo1.png"><div class="carousel-caption"><h5>Inicio</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor1ReyesLeonardo2.png"><div class="carousel-caption"><h5>Seguimiento</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor2ReyesLeonardo1.png"><div class="carousel-caption"><h5>Estado 3</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor2ReyesLeonardo2.png"><div class="carousel-caption"><h5>Estado 4</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor3ReyesLeonardo1.png"><div class="carousel-caption"><h5>Estado 5</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor3ReyesLeonardo2.png"><div class="carousel-caption"><h5>Estado 6</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor4ReyesLeonardo1.png"><div class="carousel-caption"><h5>Estado 7</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor4ReyesLeonardo2.png"><div class="carousel-caption"><h5>Estado 8</h5></div></div>
                </div>
                <a class="carousel-control-prev" href="#carruselLeo1" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#carruselLeo1" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>

        <div class="carousel-section">
            <h3 class="section-title">Tema 2: Supervivencia (Leonardo)</h3>
            <div id="carruselLeo2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor1ReyesLeonardo1.png"><div class="carousel-caption"><h5>Milagro</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor1ReyesLeonardo2.png"><div class="carousel-caption"><h5>Duda</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor2ReyesLeonardo1.png"><div class="carousel-caption"><h5>Persistencia</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor2ReyesLeonardo2.png"><div class="carousel-caption"><h5>Seguimiento</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor3ReyesLeonardo1.png"><div class="carousel-caption"><h5>Avance</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor3ReyesLeonardo2.png"><div class="carousel-caption"><h5>Estado</h5></div></div>
                </div>
                <a class="carousel-control-prev" href="#carruselLeo2" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#carruselLeo2" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>

        <div class="carousel-section">
            <h3 class="section-title">Tema 3: La Sospecha (Leonardo)</h3>
            <div id="carruselLeo3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="img-single-slide" src="../img/25_2077cDisUIUXT3Flor1ReyesLeonardo1.png"><div class="carousel-caption"><h5>Tristeza</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT3Flor1ReyesLeonardo2.png"><div class="carousel-caption"><h5>Duda</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT3Flor2ReyesLeonardo1.png"><div class="carousel-caption"><h5>Fraude</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT3Flor2ReyesLeonardo2.png"><div class="carousel-caption"><h5>Confirmado</h5></div></div>
                </div>
                <a class="carousel-control-prev" href="#carruselLeo3" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#carruselLeo3" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>

        <div class="carousel-section">
            <h3 class="section-title">Tema 4: Desenlace (Leonardo)</h3>
            <div id="carruselLeo4" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor1ReyesLeonardo1.png"><div class="carousel-caption"><h5>Esperanza</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor1ReyesLeonardo2.png"><div class="carousel-caption"><h5>Progreso</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor2ReyesLeonardo1.png"><div class="carousel-caption"><h5>Casi</h5></div></div>
                    <div class="carousel-item"><img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor2ReyesLeonardo2.png"><div class="carousel-caption"><h5>Final</h5></div></div>
                </div>
                <a class="carousel-control-prev" href="#carruselLeo4" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#carruselLeo4" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>


        <h2 class="division-header">2. Integrante: Gustavo Gutierrez</h2>

        <div class="carousel-section-gustavo">
            <h3 class="section-title">Carrusel Grid: El viaje de Gustavo</h3>
            
            <div id="carouselGustavo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h4 class="text-center text-secondary mb-3">Tema 1: El despertar</h4>
                        <div class="row">
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor1GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 1</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor1GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 1</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor2GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 2</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor2GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 2</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor3GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 3</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor3GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 3</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor4GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 4</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT1Flor4GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 4</h5></div></div></div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <h4 class="text-center text-secondary mb-3">Tema 2: Viviendo la Luz</h4>
                        <div class="row">
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT2Flor1GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 6</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT2Flor1GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 6</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT2Flor2GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 7</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT2Flor2GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 7</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT2Flor3GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 8</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT2Flor3GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 8</h5></div></div></div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <h4 class="text-center text-secondary mb-3">Tema 3: Tomando fuerza</h4>
                        <div class="row">
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT3Flor1GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 9</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT3Flor1GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 9</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT3Flor2GutierrezGustavo1.jpg"><div class="card-caption"><h5>Dia 10</h5></div></div></div>
                            <div class="col-md-6"><div class="image-card"><img src="../img/25_2077cDisUIUXT3Flor2GutierrezGustavo2.jpg"><div class="card-caption"><h5>Dia 10</h5></div></div></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselGustavo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#carouselGustavo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>


        <h2 class="division-header">3. Integrante: Eduardo Crisostomo Garcia</h2>

        <div class="carousel-section-eduardo">
            <h3 class="section-title">Evidencia Fotográfica (Eduardo)</h3>
            <p>Aquí se muestra el seguimiento realizado por Eduardo.</p>

            <div id="carruselEduardo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#carruselEduardo" data-slide-to="0" class="active"></li>
                    <li data-target="#carruselEduardo" data-slide-to="1"></li>
                    <li data-target="#carruselEduardo" data-slide-to="2"></li>
                    <li data-target="#carruselEduardo" data-slide-to="3"></li>
                </ul>

                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor1CrisostomoEduardo1.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor1CrisostomoEduardo2.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor2CrisostomoEduardo1.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor2CrisostomoEduardo2.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor3CrisostomoEduardo1.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor3CrisostomoEduardo2.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor4CrisostomoEduardo1.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT1Flor4CrisostomoEduardo2.jpg" alt="Eduardo Foto 1" onerror="this.style.display='none';">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tema 1</h5>
                            <p>El inicio del Fin</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor1CrisostomoEduardo1.jpeg" alt="Eduardo Foto 2">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor1CrisostomoEduardo2.jpeg" alt="Eduardo Foto 2">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor2CrisostomoEduardo1.jpeg" alt="Eduardo Foto 2">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor2CrisostomoEduardo2.jpeg" alt="Eduardo Foto 2">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor3CrisostomoEduardo1.jpeg" alt="Eduardo Foto 2">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT2Flor3CrisostomoEduardo2.jpeg" alt="Eduardo Foto 2">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tema 2</h5>
                            <p>¿Aún sigue aquí?</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT3Flor2CrisostomoEduardo1.jpeg" alt="Eduardo Foto 3">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT3Flor2CrisostomoEduardo2.jpeg" alt="Eduardo Foto 3">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tema 3</h5>
                            <p>Ya casi llegamos al final</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor1CrisostomoEduardo1 (1).jpeg" alt="Eduardo Foto 4">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor1CrisostomoEduardo2 (1).jpeg" alt="Eduardo Foto 4">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor2CrisostomoEduardo1.jpeg" alt="Eduardo Foto 4">
                        <img class="img-single-slide" src="../img/25_2077cDisUIUXT4Flor2CrisostomoEduardo2.jpeg" alt="Eduardo Foto 4">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tema 4</h5>
                            <p>Hasta aqui la dejamos</p>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#carruselEduardo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                <a class="carousel-control-next" href="#carruselEduardo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
            </div>
        </div>

    </div> <footer>
        <div class="container text-center">
            <h5>Instituto Tecnológico Superior de Ciudad Hidalgo</h5>
            <p class="mb-4">Diseño de Interfaz | Grupo 077</p>
            
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <p class="text-white border-bottom pb-2">Integrante 1</p>
                    <p>Leonardo Kabiel Reyes Hernandez</p>
                </div>
                <div class="col-md-4">
                    <p class="text-white border-bottom pb-2">Integrante 2</p>
                    <p>Gustavo Gutierrez Ruiz</p>
                </div>
                <div class="col-md-4">
                    <p class="text-white border-bottom pb-2">Integrante 3</p>
                    <p>Eduardo Crisostomo Garcia</p>
                </div>
            </div>
            
            <hr class="bg-secondary mt-4">
            <p>Profesor: Erik Augusto Ramírez Vargas</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
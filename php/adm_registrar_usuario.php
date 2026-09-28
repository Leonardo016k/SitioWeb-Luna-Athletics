<?php
    session_start();

    // 1. SEGURIDAD: Verificar que quien intenta registrar es un Admin
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['rol']) || $_SESSION['rol'] != 'Admin'){
        echo '
            <script>
                alert("Acceso denegado.");
                window.location = "../iniciar_sesion.php";
            </script>
        ';
        die();
    }

    include("conexion.php");

    // 2. Recibir datos del formulario
    // Los nombres dentro de $_POST[] deben coincidir con los name="" del formulario HTML
    $email    = $_POST['ema_email'];
    $nombre   = $_POST['txt_Nombre'];
    $ap_pat   = $_POST['txt_ApPat'];
    $ap_mat   = $_POST['txt_ApMat'];
    $rol      = $_POST['lst_Tipo'];
    $pass     = $_POST['pas_password'];
    $pass2    = $_POST['pas_password2'];

    // 3. Validar que las contraseñas coincidan
    if($pass != $pass2){
        echo '
            <script>
                alert("Las contraseñas no coinciden. Inténtalo de nuevo.");
                window.history.back(); // Regresa al formulario sin borrar todo
            </script>
        ';
        exit();
    }

    // 4. Verificar si el correo ya existe en la base de datos
    // Usamos 'email_usu' que es el nombre de tu columna en la BD
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email_usu = '$email'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registrado. Usa otro.");
                window.history.back();
            </script>
        ';
        exit();
    }

    // 5. Encriptar la contraseña
    $pass_encriptada = password_hash($pass, PASSWORD_DEFAULT);

    // 6. Insertar en la Base de Datos
    // Usamos los nombres de columnas de tu tabla antigua: nom_usu, ape_pat_usu, etc.
    $query = "INSERT INTO usuarios (nom_usu, ape_pat_usu, ape_mat_usu, email_usu, pas_usu, tipo_usu)
              VALUES ('$nombre', '$ap_pat', '$ap_mat', '$email', '$pass_encriptada', '$rol')";

    $ejecutar = mysqli_query($conexion, $query);

    // 7. Confirmación
    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente.");
                window.location = "../adm_usuario.php"; // Regresa a la lista de usuarios
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error al registrar: ' . mysqli_error($conexion) . '");
                window.history.back();
            </script>
        ';
    }

    mysqli_close($conexion);
?>
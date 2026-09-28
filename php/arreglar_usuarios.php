<?php
    include 'conexion.php';

    // --- 1. PREPARAR USUARIO ADMIN (Juan - ID 1) ---
    // Contraseña nueva: admin123
    $pass_admin = password_hash("admin123", PASSWORD_DEFAULT);
    
    $sql_admin = "UPDATE usuarios 
                  SET pas_usu = '$pass_admin', tipo_usu = 'Admin' 
                  WHERE id_usu = 1";

    // --- 2. PREPARAR USUARIO CLIENTE (Maria - ID 2) ---
    // Contraseña nueva: usuario123
    $pass_cliente = password_hash("usuario123", PASSWORD_DEFAULT);
    
    $sql_cliente = "UPDATE usuarios 
                    SET pas_usu = '$pass_cliente', tipo_usu = 'Usuario' 
                    WHERE id_usu = 2";

    // Ejecutar
    if(mysqli_query($conexion, $sql_admin) && mysqli_query($conexion, $sql_cliente)){
        echo "<h1>¡Usuarios Actualizados!</h1>";
        echo "<p><b>ADMINISTRADOR:</b> juan.perez@example.com <br> <b>Contraseña:</b> admin123</p>";
        echo "<p><b>CLIENTE:</b> maria.lopez@example.com <br> <b>Contraseña:</b> usuario123</p>";
        echo "<br><a href='../iniciar_sesion.php'>Ir a Iniciar Sesión</a>";
    } else {
        echo "Error al actualizar: " . mysqli_error($conexion);
    }
?>
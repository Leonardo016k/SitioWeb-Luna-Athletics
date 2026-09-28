<?php
    session_start();

    // 1. SEGURIDAD: Solo Admin puede ejecutar esto
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

    // 2. Recibir los datos del formulario
    $id_usuario = $_POST['hid_id']; // El ID oculto
    $email      = $_POST['ema_email'];
    $nombre     = $_POST['txt_Nombre'];
    $ap_pat     = $_POST['txt_ApPat'];
    $ap_mat     = $_POST['txt_ApMat'];
    $rol        = $_POST['lst_Tipo'];
    $password   = $_POST['pas_password']; // La nueva contraseña (puede estar vacía)

    // 3. Lógica para la Contraseña
    // Si el campo de contraseña NO está vacío, significa que el admin quiere cambiarla
    if(!empty($password)){
        
        // Encriptamos la nueva contraseña
        $pass_encriptada = password_hash($password, PASSWORD_DEFAULT);

        // Query CON cambio de contraseña
        $query = "UPDATE usuarios SET 
                    nom_usu = '$nombre',
                    ape_pat_usu = '$ap_pat',
                    ape_mat_usu = '$ap_mat',
                    email_usu = '$email',
                    tipo_usu = '$rol',
                    pas_usu = '$pass_encriptada'
                  WHERE id_usu = '$id_usuario'";

    } else {
        // Si el campo está vacío, NO tocamos la contraseña (se queda la vieja)
        
        // Query SIN cambio de contraseña
        $query = "UPDATE usuarios SET 
                    nom_usu = '$nombre',
                    ape_pat_usu = '$ap_pat',
                    ape_mat_usu = '$ap_mat',
                    email_usu = '$email',
                    tipo_usu = '$rol'
                  WHERE id_usu = '$id_usuario'";
    }

    // 4. Ejecutar la actualización
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario actualizado correctamente.");
                window.location = "../adm_usuario.php"; // Volver a la lista
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error al actualizar: ' . mysqli_error($conexion) . '");
                window.history.back(); // Regresar al formulario
            </script>
        ';
    }

    mysqli_close($conexion);
?>
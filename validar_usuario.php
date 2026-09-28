<?php 
    session_start(); 
    include('php/conexion.php'); 

    // Recibir datos del formulario
    $email_ingresado = $_POST['email_usu']; 
    $password_ingresado = $_POST['pas_usu'];

    // 1. Buscar el usuario por su email (columna 'email_usu')
    $query = "SELECT * FROM usuarios WHERE email_usu = '$email_ingresado'";
    $resultado = mysqli_query($conexion, $query);

    if(mysqli_num_rows($resultado) > 0){
        $fila = mysqli_fetch_assoc($resultado);
        
        // 2. Verificar contraseña encriptada (columna 'pas_usu')
        if(password_verify($password_ingresado, $fila['pas_usu'])){
            
            // Guardar datos en sesión
            $_SESSION['usuario'] = $fila['nom_usu'];
            $_SESSION['id_usuario'] = $fila['id_usu'];
            $_SESSION['rol'] = $fila['tipo_usu']; // Columna 'tipo_usu' (Admin/Usuario)

            // 3. Redireccionar según el Rol
            // En tu imagen, el rol se escribe "Admin" (con A mayúscula)
            if($fila['tipo_usu'] == 'Admin'){
                echo '
                    <script>
                        alert("Bienvenido ADMINISTRADOR: ' . $fila['nom_usu'] . '");
                        window.location = "adm_index.php"; 
                    </script>
                ';
            } else {
                // Si es 'Usuario' o cualquier otro, va al inicio
                echo '
                    <script>
                        alert("Bienvenido a LunaLift: ' . $fila['nom_usu'] . '");
                        window.location = "cli_inicio.php"; 
                    </script>
                ';
            }
            
        } else {
            echo '
                <script>
                    alert("Contraseña incorrecta");
                    window.location = "iniciar_sesion.php";
                </script>
            ';
        }
    } else {
        echo '
            <script>
                alert("El correo no existe en la base de datos");
                window.location = "iniciar_sesion.php";
            </script>
        ';
    }
    
    mysqli_close($conexion);
?>
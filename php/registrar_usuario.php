<?php 
    // 1. Incluir archivo de conexión
    include("conexion.php"); 

    // 2. Obtener las variables del formulario
    $nombre       = $_POST['name'];
    $ap_paterno   = $_POST['lastname1'];
    $ap_materno   = $_POST['lastname2'];
    // $edad      = $_POST['age']; // OJO: Tu tabla no tenía columna edad, así que no la guardamos para evitar error
    $genero       = $_POST['gender'];
    $estado_civil = $_POST['marital-status'];
    $email        = $_POST['mail'];
    $telefono     = $_POST['telephone'];
    $direccion    = $_POST['address'];
    $fecha_nac    = $_POST['birthdate'];
    $password     = $_POST['password'];

    // 3. Definir el Rol Automático
    // Aquí forzamos que todos sean "Usuario" por defecto
    $rol = "Usuario"; 

    // 4. Encriptar contraseña
    $password_encriptada = password_hash($password, PASSWORD_DEFAULT);

    // 5. Crear la consulta SQL (Usando tus columnas correctas)
    // Agregamos 'tipo_usu' a la lista y la variable '$rol' a los valores
    $query = "INSERT INTO usuarios(nom_usu, ape_pat_usu, ape_mat_usu, genero, estado_civil, email_usu, telefono, direccion, fecha, pas_usu, tipo_usu) 
              VALUES('$nombre', '$ap_paterno', '$ap_materno', '$genero', '$estado_civil', '$email', '$telefono', '$direccion', '$fecha_nac', '$password_encriptada', '$rol')";

    // 6. Verificar que el correo no se repita
    // Hacemos una pequeña consulta antes de guardar
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email_usu = '$email'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "../Registro.php";
            </script>
        ';
        exit(); // Detenemos el código aquí para que no guarde nada
    }

    // 7. Ejecutar la inserción
    $ejecutar = mysqli_query($conexion, $query);

    // 8. Mensaje de éxito o error
    if($ejecutar) {
        echo '
            <script>
                alert("¡Tu cuenta ha sido creada exitosamente!");
                window.location = "../iniciar_sesion.php"; 
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Inténtalo de nuevo, error en la base de datos.");
                window.location = "../Registro.php"; 
            </script>
        ';
    }
    
    // Cerrar conexión
    mysqli_close($conexion);
?>
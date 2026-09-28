<?php 
    session_start();

    // 1. SEGURIDAD: Verificar que sea Administrador
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['rol']) || $_SESSION['rol'] != 'Admin'){
        echo '
            <script>
                alert("Acceso denegado.");
                window.location = "../iniciar_sesion.php"; 
            </script>
        ';
        die();
    }

    include("php/conexion.php"); 

    // 2. Obtener el ID a eliminar
    if(isset($_GET['id'])) {
        $var_id = $_GET['id'];

        // 3. Consulta SQL Estándar (Usando el nombre correcto de la columna: id_usu)
        $query = "DELETE FROM usuarios WHERE id_usu = '$var_id'";
        
        // 4. Ejecutar
        $resultado = mysqli_query($conexion, $query);

        if($resultado) {
            echo '
                <script>
                    alert("El usuario se ELIMINÓ correctamente.");
                    window.location = "adm_usuario.php"; 
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Error al eliminar: ' . mysqli_error($conexion) . '");
                    window.location = "adm_usuario.php"; 
                </script>
            ';
        }
    } else {
        // Si intentan entrar sin ID
        header("Location: adm_usuario.php");
    }
    
    mysqli_close($conexion);
?>
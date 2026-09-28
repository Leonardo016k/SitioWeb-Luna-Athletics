<!-- <?php

// // Realizamos la conexión con la base de datos
// if (!function_exists('db_query')) {
//     function db_query($query) {
//         $db_host = 'localhost';
//         $db_user = 'root';
//         $db_password = '';
//         $db_name = 'papeleriamary';
//         $db_port = '3306';

//         $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name, $db_port);
//         $result = mysqli_query($connection, $query);
//         return $result;
//     }
// }

// // que no deben hacer 
// // function select(){
// //     $sql = "SELECT * FROM usuarios";
// //     $db=db_query($sql);
// //     return $db;
// // }
// // function select2(){
// //     $sql = "SELECT * FROM provedores";
// //     $db=db_query($sql);
// //     return $db;
// // }

// function select($tbl_name){
//     $sql = "SELECT * FROM $tbl_name";
//     $db=db_query($sql);
//     return $db;
// }

// function select_columnas($tbl_name,$columnas){
//     $sql = "SELECT $columnas FROM $tbl_name";
//     $db=db_query($sql);
//     return $db;
// }


// function insert($tbl_name,$db_values){
//     $sql="INSERT INTO $tbl_name VALUES($db_values);";
//     echo $sql;
//     return db_query($sql);
//  }

// // function select_where1($tbl_name, $field_name, $field_value){
// //     $sql = "SELECT * FROM $tbl_name WHERE $field_name = $field_value";
// //     $db=db_query($sql);
// //     return $db;
// // }

// // select_where("usuarios", "id_usuarios=2 AND usu_tipo='Admn'")

// function select_where($tbl_name, $field_condition){
//     $sql = "SELECT * FROM $tbl_name WHERE $field_condition";
//     $db=db_query($sql);
//     return $db;
// }

// function update($tbl_name,$field_col,$field_where){
//     $sql = "UPDATE $tbl_name
//             SET $field_col
//             WHERE $field_where";
//     $db=db_query($sql);
//     return $db;
// }

// function delete($tbl_name,$field_condition){
//     $sql = "DELETE FROM $tbl_name WHERE $field_condition";
//     $db=db_query($sql);
//     return $db;
// }
?> -->

<?php
    // Definimos las credenciales
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $base_datos = "papeleriamary"; // Asegúrate de que este sea el nombre real de tu BD

    // Creamos la conexión y la guardamos en la variable $conexion
    $conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

    // Verificamos si hubo error
    if(!$conexion){
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }
    
    // Opcional: Configurar caracteres para que acepte ñ y acentos
    mysqli_set_charset($conexion, "utf8");
?>
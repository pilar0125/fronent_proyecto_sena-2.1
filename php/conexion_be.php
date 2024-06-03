<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "login_register_db";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}



// $conexion = mysqli_connect("localhost", "root", "", "login_register_db");
/* condicional para saber si esta conectando a la base de datos
if ($conexion) {
    echo 'Conectado exitosamente a la Base de Datos';
} else {
    echo 'No se ha podido conectar a la Base de Datos: ' . mysqli_connect_error();
}
*/
?>
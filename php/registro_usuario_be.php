<?php

   include 'conexion_be.php';
   $conexion = connection();


   $nombre_completo = $_POST['nombre_completo'];
   $correo = $_POST['correo'];
   $usuario = $_POST['usuario'];
   $contrasena = $_POST['contrasena'];


   $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
             VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    $ejectutar = mysqli_query($conexion, $query);


   if($ejectutar){
        echo '
             <script>
                 alert("Usuario registrado exitosamente");
                 window.location ="../index.php";
             </script>
            ';
        }else{
            echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location ="../index.php";
            </script>
           ';
        }

        mysqli_close($conexion);



?>
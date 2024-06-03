<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Login Y Registro - LasdosPalmas</title>
    <link rel="shortcut icon" href="Img/login.jpg" type="image/x-icon" > <!--este es el codigo para icono-->
    <link rel="stylesheet" href="CSS/login-register.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html"> Home </a>
            <a href="register.html"> Iniciar Sesión </a>
            <a href="register.html"> Registrarse </a>
        </nav>
    </header>

    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3> Usuario </h3>
                    <p> Inicia sesion</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-login">
                    <h3> Nuevo Usuario </h3>
                    <p> Registrarse</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
             <!--Este es un Formulario de login y Registro-->
            <div class="contenedor__login-register">
                <!--Formulario de la parte de login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesion </h2>
                    <input type="text" placeholder= "Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!--Formulario de la parte de registro-->
                <form action="php/registro_usuario_be.php" method="POST"class="formulario__register">
                     <h2> Registrarse </h2>
                     <input type="text" placeholder="Nombre Completo" name = "nombre_completo">
                     <input type="text" placeholder="Correo Electronico" name= "correo">
                     <input typet="text" placeholder="Usuario" name="usuario">
                     <input type="password" placeholder="Contraseña" name= "contrasena">
                     <button> Registrarse</button>
                </form>
           
            </div>


        </div>
     
            
    </main>
    <script src= "Productos/script.js"></script>

</body>
</html>
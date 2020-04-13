<?php 
    
    include 'codigo_registro.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro University Corporation</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos_login/estilos_login.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<header>
      
       <div class="textos">
           <h1 class= "titulo">University Corporation </h1>
           <h3 class= "subtitulo">Acceder a plataforma</h3>
           <a href="index.php" class="boton">INICIO</a>
       </div>
       <div class="sesgoabajo"></div> 
    </header>
<body>

    <div class="contenedor-all">

        <div class="contenedor-form">
        <img src="imagenes/223172490080.jpg" all="" class="logo">
            <h1 class="titulo-login">Registrarse</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               
                <label for="">Nombre de Usuario</label>
                <input type="text" name="username">
                <span class="error"><?php echo $username_err; ?></span>
                <label for="">Email</label>
                <input type="text" name="email">
                <span class="error"> <?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="error"> <?php echo $password_err; ?></span>

                <input type="submit" value="Registrarse">

            </form>

            <span class="text-footer">¿Ya te has registrado?
                <a href="login.php">Iniciar Sesión</a>
            </span>
        </div>

        <div class="contenedor-texto-login">
                    <div class="contenedor-capa"></div>
                    <h1 class="titulo-descripcion">Registro University Corporation</h1>
                    <p class="texto-descripcion">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam aperiam amet sint quidem ipsam iure provident, facere cum illum eaque vel qui repudiandae exercitationem suscipit expedita rerum tempore alias voluptatibus?</p>
                </div>
            </div>
            <section class="fondo">
                <div class="sesgoarriba"></div>
                <div class="sesgoabajo-unico"></div>
            </section>
    <footer>
        <div class="contenedor">
            <h2 class="titulo-footer"> Contactanos</h2>
            <h3 class="subtitulo-footer"> Lo apreciariamos mucho</h3>
            <div class="footer">
                <form action="">
                    <input type="search" name="" id="" placeholder="Nombre">
                    <input type="email" name="" id="" placeholder="E-mail">
                    <textarea name="Mensaje" id="" cols="30" rows="10" placeholder="Ingrese su mensaje..."></textarea>

                </form>
            </div>
        </div>
    </footer>

</body>

</html>
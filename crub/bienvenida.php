<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos_tablas/estilos_tablas.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<header>
      
      <div class="textos">
          <h1 class= "titulo">University Corporation </h1>
          <h3 class= "subtitulo">Bienvenido</h3>
          <a href="cerrar-sesion.php" class="boton">Cerrar Sesión</a>
          
      </div>
      <div class="sesgoabajo"></div> 
   </header>
   
   <div class="contenedor-bienvenida">
   <h2>Sistema CRUB</h2>
    
        <table>
			<tr class="head">
				<td>Horarios</td>
                <td>Alumnos</td>
        
				<tr >
					
					<td><a href="horarios.php?id="  class="btn__update" >Ir a Horarios</a></td>
					<td><a href="alumnos.php?id=" class="btn__delete">Ir a lista de Alumnos</a></td>
				</tr>


        </table>
       
       
   </div>
   <section class="fondo">
                <div class="sesgoarriba"></div>

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
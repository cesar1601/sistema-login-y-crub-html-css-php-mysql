<?php 
	include_once 'conexion2.php';
	
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$fecha=$_POST['fecha'];
		$aula=$_POST['aula'];
        $horario=$_POST['horario'];
        $correo=$_POST['correo'];

        if(!empty($nombre) && !empty($fecha) && !empty($aula) && !empty($horario) && !empty($correo)){
			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO horarios(nombre,fecha,aula,horario,correo) VALUES(:nombre,:fecha,:aula,:horario,:correo)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':fecha' =>$fecha,
					':aula' =>$aula,
                    ':horario' =>$horario,
                    ':correo' =>$correo
				));
				header('Location: horarios.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>editar alumno</title>
	<link rel="stylesheet" href="estilos_tablas/estilos_tablas.css">
</head>
<body>
<header>
      
	  <div class="textos">
		  <h1 class= "titulo">University Corporation </h1>
		  <h3 class= "subtitulo">Horarios</h3>
		  <a href="bienvenida.php" class="boton">Volver</a>
	  </div>
	  <div class="sesgoabajo"></div> 
   </header>
	<div class="contenedor">
        <h2>Horarios</h2>
        <form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
				<input type="text" name="fecha" placeholder="Fecha" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="aula" placeholder="Aula" class="input__text">
				<input type="text" name="horario" placeholder="Horario" class="input__text">
			</div>
			<div class="form-group">
                
                <input type="text" name="correo" placeholder="Correo" class="input__text">
			</div>
			<div class="btn__group">
				<a href="horarios.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
        </div>
		<section class="fondo">
        
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
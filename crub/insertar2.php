<?php 
	include_once 'conexion3.php';
	
	if(isset($_POST['guardar'])){
		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
		$edad=$_POST['edad'];
		$semestre=$_POST['semestre'];
        $horario=$_POST['horario'];
        $correo=$_POST['correo'];

        if(!empty($nombres) && !empty($apellidos) && !empty($edad) && !empty($semestre) && !empty($horario) && !empty($correo)){
			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO alumnos(nombres,apellidos,edad,semestre,horario,correo) VALUES(:nombres,:apellidos,:edad,:semestre,:horario,:correo)');
				$consulta_insert->execute(array(
					':nombres' =>$nombres,
					':apellidos' =>$apellidos,
					':edad' =>$edad,
					':semestre' =>$semestre,
                    ':horario' =>$horario,
                    ':correo' =>$correo
				));
				header('Location: alumnos.php');
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
	<title>Nuevo alumno</title>
	<link rel="stylesheet" href="estilos_tablas/estilos_tablas.css">
</head>
<body>
	<div class="contenedor">
        <h2>Alumnos</h2>
        <form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombres" placeholder="Nombres" class="input__text">
				<input type="text" name="apellidos" placeholder="Apellidos" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="edad" placeholder="Edad" class="input__text">
				<input type="text" name="semestre" placeholder="Semestre" class="input__text">
			</div>
			<div class="form-group">
                <input type="text" name="horario" placeholder="Horario" class="input__text">
                <input type="text" name="correo" placeholder="Correo" class="input__text">
			</div>
			<div class="btn__group">
				<a href="alumnos.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
        </div>
</body>
</html>
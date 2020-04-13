<?php 
    include_once 'conexion3.php';

    if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM alumnos WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: alumnos.php');
    }
    
    if(isset($_POST['guardar'])){
		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
		$edad=$_POST['edad'];
		$semestre=$_POST['semestre'];
        $horario=$_POST['horario'];
        $correo=$_POST['correo'];
		$id=(int) $_GET['id'];

		if(!empty($nombres) && !empty($apellidos) && !empty($edad) && !empty($semestre) && !empty($horario) && !empty($correo) ){
			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_update=$con->prepare(' UPDATE alumnos SET  
					nombres=:nombres,
					apellidos=:apellidos,
					edad=:edad,
					semestre=:semestre,
					horario=:horario,
					correo=:correo
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':nombres' =>$nombres,
					':apellidos' =>$apellidos,
					':edad' =>$edad,
					':semestre' =>$semestre,
					':horario' =>$horario,
					':correo' =>$correo,
					':id' =>$id
				));
				header('Location:alumnos.php');
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
	<title>Editar alumno</title>
	<link rel="stylesheet" href="estilos_tablas/estilos_tablas.css">
</head>
<body>
<header>
      
	  <div class="textos">
		  <h1 class= "titulo">University Corporation </h1>
		  <h3 class= "subtitulo">Alumnos</h3>
		  <a href="alumnos.php" class="boton">Volver</a>
	  </div>
	  <div class="sesgoabajo"></div> 
   </header>
	<div class="contenedor">
        <h2>Alumnos</h2>
        <form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombres" value="<?php if($resultado) echo $resultado['nombres']; ?>" class="input__text">
				<input type="text" name="apellidos"  value="<?php if($resultado) echo $resultado['apellidos']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="edad"  value="<?php if($resultado) echo $resultado['edad']; ?>" class="input__text">
				<input type="text" name="semestre"  value="<?php if($resultado) echo $resultado['semestre']; ?>" class="input__text">
			</div>
			<div class="form-group">
                <input type="text" name="horario"  value="<?php if($resultado) echo $resultado['horario']; ?>" class="input__text">
                <input type="text" name="correo"  value="<?php if($resultado) echo $resultado['correo']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="alumnos.php" class="btn btn__danger">Cancelar</a>
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
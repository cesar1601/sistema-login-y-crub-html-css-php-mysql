<?php
    include_once 'conexion2.php';
    $sentencia_select=$con->prepare('SELECT *FROM horarios ORDER BY id DESC');
    $sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();
	

	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM horarios WHERE nombre LIKE :campo OR aula LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Horarios</title>
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
        <div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="buscar nombre de clase o aula" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insertar.php" class="btn btn__nuevo">Nuevo</a>
			</form>
        </div>
        <table>
			<tr class="head">
				<td>Id</td>
				<td>Nombre</td>
				<td>Fecha</td>
                <td>Aula</td>
                <td>Horario</td>
				<td>Correo del monitor</td>
				<td colspan="2">Acción</td>
            </tr>
            <?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['fecha']; ?></td>
					<td><?php echo $fila['aula']; ?></td>
					<td><?php echo $fila['horario']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><a href="guardar.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

        </table>
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
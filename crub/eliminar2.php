<?php 

	include_once 'conexion3.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM alumnos WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: alumnos.php');
	}else{
		header('Location: alumnos.php');
	}
 ?>
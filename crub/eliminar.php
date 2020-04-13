<?php 

	include_once 'conexion2.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM horarios WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: horarios.php');
	}else{
		header('Location: horarios.php');
	}
 ?>
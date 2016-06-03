<?php
   echo insertar("tb_usuarios",[[1120578783,"documento"],["Ricardo","nombre"],["1995-12-10","fec_nacimiento"]]);

  function insertar($tabla, $campos)
	{
		echo $campos[0][0]."&nbsp;/".$campos[0][1]."<br>";
		echo $campos[1][0]."&nbsp;/".$campos[1][1]."<br>";
		echo $campos[2][0]."&nbsp;/".$campos[2][1]."<br>";
		//$sql="INSERT INTO $tabla(documento, nombre, fec_nacimiento)";	

		$respuesta =" VALUES("."'".$campos[0][0]."','".$campos[1][0]."','".$campos[2][0]."')";
		
		return guardar($tabla, $respuesta);
	}
  function guardar($tabla ,$respuesta)

	{
		include('../config.php');
		$sql="INSERT INTO $tabla(documento, nombre, fec_nacimiento)";
		$sql.=$respuesta;
		echo $sql;
		$conn = mysqli_connect($servidor, $usuario, $clave, $bd);
		$resultado = $conn->query($sql);
	}
?>
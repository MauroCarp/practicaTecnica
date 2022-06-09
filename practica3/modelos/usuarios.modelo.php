<?php

require_once "conexion.php";

class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){
		
		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();
						// var_dump($stmt ->errorInfo());

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	NUEVO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellidos,fechaNacimiento,sexo) VALUES (:nombre,:apellidos,:fechaNacimiento,:sexo)");
		
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaNacimiento", $datos["fechaNacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
		
		if($stmt->execute()){
			
			return "ok";	
			
		}else{
			
			return $stmt->errorInfo();
			return 'error';

		}
		
		$stmt->close();
		
		$stmt = null;


	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarUsuario($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellidos = :apellidos,fechaNacimiento = :fechaNacimiento,sexo = :sexo  WHERE idUsuario = :idUsuario");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
		$stmt -> bindParam(":fechaNacimiento", $datos["fechaNacimiento"], PDO::PARAM_STR);
		$stmt -> bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
		$stmt -> bindParam(":idUsuario", $datos["idUsuario"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ALTA/BAJA USUARIO
	=============================================*/

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$valor1 = boolval($valor1);
		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_INT);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{
			return $stmt->errorInfo();
			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function mdlBorrarUsuario($tabla, $item,$value){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $value, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}

}
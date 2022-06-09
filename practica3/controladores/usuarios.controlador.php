<?php

class ControladorUsuarios{


	/*=============================================
	NUEVO DE USUARIO
	=============================================*/

	static public function ctrCrearUsuario(){

		if(isset($_POST["nuevoUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoNombre"])){

				$tabla = "usuarios";

				$datos = array("nombre" => $_POST["nuevoNombre"],
					           "apellidos" => $_POST["nuevoApellidos"],
					           "fechaNacimiento" => $_POST["nuevoFecha"],
							   "sexo" => $_POST["nuevoSexo"]);
							   

				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

				var_dump($respuesta);
				if($respuesta == "ok"){

					echo '<script>

					new swal({

						icon: "success",
						title: "¡El usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					new swal({

						icon: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarUsuario(){

		if(isset($_POST["editarUsuario"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

				$tabla = "usuarios";

				$datos = array("nombre" => $_POST["editarNombre"],
							   "apellidos" => $_POST["editarApellidos"],
							   "fechaNacimiento" => $_POST["editarFecha"],
							   "sexo" => $_POST["editarSexo"],
							   "idUsuario" => $_POST['editarIdUsuario']);

				$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);
				
				if($respuesta == "ok"){

					echo'<script>

					new swal({
						  icon: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					new swal({
						  icon: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarUsuario(){

		if(isset($_GET["idUsuario"])){
			
			$tabla ="usuarios";
			
			$item = 'idUsuario';

			$value = $_GET["idUsuario"];
			
			$respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $item, $value);
			
			if($respuesta == "ok"){

				echo'<script>

				new swal({
					  icon: "success",
					  title: "El usuario ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "usuarios";

								}
							})

				</script>';

			}		

		}

	}


}
	



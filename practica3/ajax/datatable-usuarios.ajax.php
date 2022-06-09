<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class TablaUsuarios{


	public function mostrarTabla(){

        $item = null;

        $valor = null;

		$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

        if(count($usuarios) == 0){

  			echo '{"data": []}';

		  	return;
  		}	
				
		$datosJson = '{
			"data": [';
			
			foreach ($usuarios as $key => $usuario) {

				$btns = "<div class='btn-group'><button class='btn btn-warning btnEditarUsuario' idUsuario='".$usuario['idUsuario']."' data-toggle='modal' data-target='#modalEditarUsuario' ><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarUsuario' idUsuario='".$usuario['idUsuario']."'><i class='fa fa-times'></i></button></div>";
				

				$sexo = ($usuario['sexo'] == 'M') ? 'Masculino' : 'Femenino';

                $estado = 'Baja';
                $color = 'danger';

                if($usuario['estado']){

                    $estado = 'Alta';
                    $color = 'success';

                }


                $label = "<span class='label label-$color btnEstado' idUsuario='".$usuario['idUsuario']."' estadoUsuario='".$usuario['estado']."'>$estado</span>";

                $datosJson .='[
					"'.$usuario["nombre"].'",
					"'.$usuario["apellidos"].'",
					"'.$usuario["fechaNacimiento"].'",
					"'.$sexo.'",
					"'.$label.'",
					"'.$btns.'"],';

			}

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}


}

/*=============================================
TABLA DE ANIMALES
=============================================*/ 
$activarTablaAnimales = new TablaUsuarios();
$activarTablaAnimales -> mostrarTabla();


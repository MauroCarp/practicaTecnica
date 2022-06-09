$('.tablaUsuarios').DataTable( {
	"ajax": "ajax/datatable-usuarios.ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"searching": false,
	"info":     false,
	"bLengthChange": false,
	"pageLength": 10,
	
	"language": {
  
		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		}
  
  }
  
  } );

/*=============================================
EDITAR USUARIO
=============================================*/
$(".tablaUsuarios").on("click", ".btnEditarUsuario", function(){

	let idUsuario = $(this).attr("idUsuario");

	let datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({

		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: (respuesta)=>{
			
			$("#editarIdUsuario").val(respuesta["idUsuario"]);
			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarApellidos").val(respuesta["apellidos"]);
			$("#editarFecha").val(respuesta["fechaNacimiento"]);

			if(respuesta['sexo'] == 'M'){
				
				$('#editarSexo option[value="M"]').attr('selected', 'selected')

			}else{
				
				$('#editarSexo option[value="F"]').attr('selected', 'selected')

			}

		}

	});

})

/*=============================================
ALTA/BAJA USUARIO
=============================================*/
$(".tablaUsuarios").on("click", ".btnEstado", function(){

	let idUsuario = $(this).attr("idUsuario");
	let estadoUsuario = $(this).attr("estadoUsuario");

	let btn = $(this)

	let datos = new FormData();
 	datos.append("activarId", idUsuario);
  	datos.append("activarUsuario", estadoUsuario);

  	$.ajax({

	  url:"ajax/usuarios.ajax.php",
	  method: "POST",
	  data: datos,
	  cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){

		new swal({
		title: "El usuario ha cambiado su estado",
		icon: "success",
		confirmButtonText: "¡Cerrar!"
		}).then(function(result) {

			if (result.value) {

				if(estadoUsuario == 1){

					btn.removeClass('label-success');
					btn.addClass('label-danger');
					btn.html('Baja');
					btn.attr('estadoUsuario',1);
		  
				}else{
		  
					btn.addClass('label-success');
					btn.removeClass('label-danger');
					btn.html('Alta');
					btn.attr('estadoUsuario',0);
		  
				}

			}


		});

      }

  	})

})

/*=============================================
BORRAR USUARIO
=============================================*/
$(".tablaUsuarios").on("click", ".btnEliminarUsuario", function(){

	console.log('hola');
  let idUsuario = $(this).attr("idUsuario");

  new swal({
    title: '¿Está seguro de borrar el usuario?',
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar usuario!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?idUsuario="+idUsuario;

    }

  })

})





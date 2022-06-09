
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Gesti&oacute;n de Usuarios
    
    </h1>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar usuario

        </button>

      </div>
  <br>
      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaUsuarios" width="100%">
         
        <thead>
         
         <tr>
           
           <th>Nombre</th>
           <th>Apellidos</th>
           <th>Fecha de Nacimiento</th>
           <th>Sexo</th>
           <th>Estado</th>
           <th></th>

         </tr> 

        </thead>

        <tbody>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!-- 
    MODAL NUEVO USUARIO 
                        -->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

        <div class="modal-body">

          <div class="box-body">
              
            <div class="form-group">
      
              <label for="nuevoNombre">Nombre</label>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoNombre" name="nuevoNombre" required>

              </div>

            </div>

            <div class="form-group">

              <label for="nuevoApellidos">Apellidos</label>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoApellidos" name="nuevoApellidos" required>

              </div>

            </div>

            <div class="form-group">

              <label for="nuevoFecha">Fecha de Nacimiento</label>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="date" class="form-control input-lg" id="nuevoFecha" name="nuevoFecha" required>

              </div>

            </div>

            <div class="form-group">
              
              <label for="nuevoSexo">Sexo</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoSexo" id="nuevoSexo">
                  
                  <option value="M">Masculino</option>

                  <option value="F">Femenino</option>

                </select>

              </div>

            </div>


          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary" name="nuevoUsuario">Guardar usuario</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

</div>


<!-- 
    MODAL EDITAR USUARIO 
                          -->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <div class="modal-body">

          <div class="box-body">
            
            <div class="form-group">
    
              <label for="editarNombre">Nombre</label>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>
                <input type="hidden" id="editarIdUsuario" name="editarIdUsuario" value="" required>

              </div>

            </div>

            <div class="form-group">

              <label for="editarApellidos">Apellidos</label>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarApellidos" name="editarApellidos" value="" required>

              </div>

            </div>

            <div class="form-group">

              <label for="editarFecha">Fecha de Nacimiento</label>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="date" class="form-control input-lg" id="editarFecha" name="editarFecha" value="" required>

              </div>

            </div>

            <div class="form-group">
              
              <label for="editarSexo">Sexo</label>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarSexo" id="editarSexo">
                  
                  <option value="M">Masculino</option>

                  <option value="F">Femenino</option>

                </select>

              </div>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary" name="editarUsuario">Modificar usuario</button>

        </div>

     <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 



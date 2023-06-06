<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="tituloModal">Nuevo alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUsuario" name="formUsuario">
          <div class="form-group">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
          <div class="form-group">
            <label for="control-label">Apellidos:</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos">
          </div>
          <div class="form-group">
            <label for="control-label">Fecha de Nacimiento:</label>
            <input type="text" class="form-control" name="fecha de nacimiento" id="fecha de nacimiento">
          </div>
          <div class="form-group">
            <label for="listGrado">Grado</label>
            <select class="form-control" name="listGrado" id="listGrado">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            </div>
          <div class="form-group">
            <label for="listGrupo">Grupo</label>
            <select class="form-control" name="listGrupo" id="listGrupo">
                <option value="1">"A"</option>
                <option value="2">"B"</option>
                <option value="3">"C"</option>
                <option value="4">"D"</option>
                <option value="5">"E"</option>
                <option value="6">"F"</option>
            </select>
          </div>
          <div class="form-group">
            <label for="listEstado">Estado</label>
            <select class="form-control" name="listEstado" id="listEstado">
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" type="submit">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div> 
</div> 
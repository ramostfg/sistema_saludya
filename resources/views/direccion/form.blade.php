<br><h4>DATOS DE HABITACIÓN</h4>

<div class="row">
    <div class="form-group col-md-4">
        <label for="entidad" class="form-label">Entidad Federal:</label>
        <input type="text" class="form-control" id="entidad" name="entidad" value="{{isset( $persona->direccion->entidad)?$persona->direccion->entidad:'' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="municipio" class="form-label">Municipio:</label>
        <input type="text" class="form-control" id="municipio" name="municipio" value="{{isset( $persona->direccion->municipio)?$persona->direccion->municipio:'' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="parroquia" class="form-label">Parroquia:</label>
        <input type="text" class="form-control" id="parroquia" name="parroquia" value="{{isset( $persona->direccion->parroquia)?$persona->direccion->parroquia:'' }}" >
    </div>

    <div class="form-group col-md-4">
        <label for="sector" class="form-label">Sector:</label>
        <input type="text" class="form-control" id="sector" name="sector" value="{{isset( $persona->direccion->sector)?$persona->direccion->sector:'' }}">
    </div>

    <div class="form-group col-md-8">
        <label for="direccion" class="form-label">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{isset( $persona->direccion->direccion)?$persona->direccion->direccion:'' }}">
    </div>
</div>